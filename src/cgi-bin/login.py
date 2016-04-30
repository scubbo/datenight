#!/usr/bin/env python3
import cgi
from passlib.hash import sha256_crypt
from boto3 import resource
from boto3.dynamodb.conditions import Attr
from uuid import uuid4
from datetime import datetime, timedelta
from json import dumps

def main():
  form = cgi.FieldStorage()
  
  username = form['username'].value
  password = form['password'].value
  
  r = resource('dynamodb')
  usersTable = r.Table('Users')
  userData = usersTable.get_item(Key={'username':username})
  if not ('Item' in userData and sha256_crypt.verify(password, userData['Item']['hash'])) :
    return errorResponse()

  # Expire old sessions
  sessionsTable = r.Table('Sessions')
  sessionsToInvalidate = sessionsTable.scan(FilterExpression=Attr('username').eq(username) & Attr('active').eq(True))
  if 'Items' in sessionsToInvalidate:
    for item in sessionsToInvalidate['Items']:
      sessionsTable.update_item(Key={'id':item['id']}, UpdateExpression='SET active = :false', ExpressionAttributeValues={':false': False})

  # Create new session
  sessionId = str(uuid4())
  expiryDate = datetime.now() + timedelta(0,0,0,0,5,0,0)
  sessionsTable.put_item(Item={'id':sessionId, 'username':username, 'active':True, 'expires':str(expiryDate)})
  usersTable.update_item(Key={'username':username}, UpdateExpression='SET latestSession = :latestSession', ExpressionAttributeValues={':latestSession':sessionId})

  print('Set-Cookie: sessionId=' + sessionId + '; Path=/; Expires=' + expiryDate.strftime('%a, %d-%b-%Y %T GMT'))
  print('Content-Type: application/json')
  print('')
  print(dumps({'status':'SUCCESS'}))

def errorResponse():
  print('Content-Type: application/json')
  print('')
  print(dumps({'status':'FAILURE'}))

if __name__ == '__main__':
  main()

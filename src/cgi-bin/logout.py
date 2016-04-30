#!/usr/bin/env python3
import os
from http.cookies import SimpleCookie
from boto3 import resource

cookie = SimpleCookie(os.environ['HTTP_COOKIE'])
sessionId = cookie['sessionId'].value

r = resource('dynamodb')
sessionsTable = r.Table('Sessions')
session = sessionsTable.get_item(Key={'id':sessionId})
if 'Item' in session:
  username = session['Item']['username']
  sessionsTable.update_item(Key={'id':sessionId}, UpdateExpression='SET active = :false', ExpressionAttributeValues={':false': False})
  
  usersTable = r.Table('Users')
  usersTable.update_item(Key={'username':username}, UpdateExpression='REMOVE latestSession')

print('Content-Type: application/json')
print('Set-Cookie: sessionId=; Path=/; Expires=Thu, 01 Jan 1970 00:00:00 GMT;')
print('')

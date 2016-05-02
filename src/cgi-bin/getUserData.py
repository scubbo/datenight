#!/usr/bin/env python3
from os import environ
from boto3 import resource
from http.cookies import SimpleCookie
from datetime import datetime
from json import dumps

cookie = SimpleCookie(environ['HTTP_COOKIE'])
sessionId = cookie['sessionId'].value

r = resource('dynamodb')

sessionsTable = r.Table('Sessions')
session = sessionsTable.get_item(Key={'id':sessionId})

print('Content-Type: application/json')
print('')

if 'Item' in session and session['Item']['active'] is not False and datetime.strptime(session['Item']['expires'], '%Y-%m-%d %H:%M:%S.%f') > datetime.now():
  username = session['Item']['username']
  usersTable = r.Table('Users')
  user = usersTable.get_item(Key={'username':username}, AttributesToGet=['firstName','lastName'])
  firstName, lastName = user['Item']['firstName'], user['Item']['lastName']
  print(dumps({'status':'SUCCESS', 'firstName':firstName, 'lastName':lastName}))
else:  
  print(dumps({'status':'FAILURE', 'session':dumps(session['Item']), 'datetime':str(datetime)}))

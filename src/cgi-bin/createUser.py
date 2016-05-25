#!/usr/bin/env python3
import cgi
from boto3 import resource
from uuid import uuid4
from json import dumps

form = cgi.FieldStorage()

data = form['data'].value
parsedData = cgi.parse_qs(data)

print('Content-Type: text/html')
userId = str(uuid4())
print('Set-Cookie: userId=' + userId + '; Path=/;')
print()

r = resource('dynamodb')

usersTable = r.Table('Users')
userItem = {'id':userId, 'date':parsedData['date'][0], 'startTime':parsedData['startTime'][0], 'endTime':parsedData['endTime'][0], 'budget':parsedData['budget'][0]}

usersTable.put_item(Item=userItem)

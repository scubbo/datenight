#!/usr/bin/env python3
import cgi
from boto3 import resource
from uuid import uuid4
from json import dumps

form = cgi.FieldStorage()

data = form['data'].value
parsedData = cgi.parse_qs(data)

print('Content-Type: application/json')
print()

r = resource('dynamodb')

booleans = ['children']
radios = ['ageRange','traditionalAdventurous','closeOrFar', 'sillySerious','adventurousTraditional','braveCautious','activePassive','laidBackActive', 'sociablePrivate']
strings = ['whoWith', 'howLongTogether', 'hobbies','religion','occasion','postcode','allergies','dietary','alcohol','fears','dislikes','lastDates']

userId = str(uuid4())
usersTable = r.Table('Users')
userItem = {'id':userId}
for booleanKey in booleans:
  userItem[booleanKey] = parsedData[booleanKey][0] == 'true'
for radiosKey in radios:
  userItem[radiosKey] = parsedData[radiosKey][0]
for stringKey in strings:
  try:
    userItem[stringKey] = parsedData[stringKey][0]
  except KeyError:
    userItem[stringKey] = '<blank>'
userItem['interests'] = ','.join(parsedData['interests'])

usersTable.put_item(Item=userItem)

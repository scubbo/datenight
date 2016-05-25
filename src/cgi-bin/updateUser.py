#!/usr/bin/env python3
import cgi
from boto3 import resource
from uuid import uuid4
from json import dumps
from http.cookies import SimpleCookie
from os import environ

def main():
  
  print('Content-Type: application/json')
  print()

  try:
    cookie = SimpleCookie(environ["HTTP_COOKIE"])
    userId = cookie["userId"].value
  except (Cookie.CookieError, KeyError):
    print(dumps({'status':'FAILURE','failureCode':'NO_USERID_COOKIE'}))
    return

  form = cgi.FieldStorage()
  
  data = form['data'].value
  parsedData = cgi.parse_qs(data)
  
  r = resource('dynamodb')
  
  booleans = ['children']
  radios = ['ageRange','typicalDate','traditionalAdventurous','closeOrFar','reason','sillySerious','braveCautious','laidBackActive', 'sociablePrivate']
  strings = ['username','whoWith','howLongTogether','howOften','otherTypicalText','numberOfChildren','hobbies','religion','occasion','postcode','allergies','dietary','alcohol','fears','dislikes']
  
  usersTable = r.Table('Users')
  updateStrings = []
  updateValues = {}
  for booleanKey in booleans:
    updateStrings.append(booleanKey + '=:' + booleanKey)
    updateValues[':'+booleanKey] = (parsedData[booleanKey][0] == 'true')
  for radiosKey in radios:
    updateStrings.append(radiosKey + '=:' + radiosKey)
    updateValues[':'+radiosKey] = parsedData[radiosKey][0]
  for stringKey in strings:
    updateStrings.append(stringKey + '=:' + stringKey)
    try:
      updateValues[':'+stringKey] = parsedData[stringKey][0]
    except KeyError:
      updateValues[':'+stringKey] = '<blank>'
  updateStrings.append('interests=:interests')
  updateValues[':interests'] = ','.join(parsedData['interests'])
  
  usersTable.update_item(
    Key={
      'id':userId
    },
    UpdateExpression = 'SET ' + ','.join(updateStrings),
    ExpressionAttributeValues = updateValues
  )

if __name__ == '__main__':
  main()



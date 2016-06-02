#!/usr/bin/env python3
import cgi
from boto3 import resource, client
from uuid import uuid4
from json import dumps
from http.cookies import SimpleCookie
from os import environ

EMAIL_ADDRESS = 'DateNight.contact@gmail.com'

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
  emailText = 'We got a new signup from ' + parsedData['username'][0] + '\nHere\'s a dump of their information (I\'ll make this a bit prettier once I know it works!)'
  for booleanKey in booleans:
    updateStrings.append(booleanKey + '=:' + booleanKey)
    updateValues[':'+booleanKey] = (parsedData[booleanKey][0] == 'true')
    emailText += '\n' + booleanKey + ' = ' + parsedData[booleanKey][0]
  for radiosKey in radios:
    updateStrings.append(radiosKey + '=:' + radiosKey)
    updateValues[':'+radiosKey] = parsedData[radiosKey][0]
    emailText += '\n' + radiosKey + ' = ' + parsedData[radiosKey][0]
  for stringKey in strings:
    updateStrings.append(stringKey + '=:' + stringKey)
    try:
      updateValues[':'+stringKey] = parsedData[stringKey][0]
      emailText += '\n' + stringKey + ' = ' + parsedData[stringKey][0]
    except KeyError:
      updateValues[':'+stringKey] = '<blank>'
      emailText += '\n' + stringKey + ' = <blank>'
  updateStrings.append('interests=:interests')
  updateValues[':interests'] = ','.join(parsedData['interests'])
  emailText += '\ninterests = ' + ','.join(parsedData['interests'])
  
  usersTable.update_item(
    Key={
      'id':userId
    },
    UpdateExpression = 'SET ' + ','.join(updateStrings),
    ExpressionAttributeValues = updateValues
  )

  sesClient = client('ses')
  sesClient.send_email(
    Source = EMAIL_ADDRESS,
    Destination = {
      'ToAddresses': [EMAIL_ADDRESS]
    },
    Message = {
      'Subject': {'Data':'New signup! - ' + parsedData['username'][0]},
      'Body': {'Text':{'Data':emailText}}
    }
  )

  print(dumps({'status':'SUCCESS'}))

if __name__ == '__main__':
  main()



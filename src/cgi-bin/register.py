#!/usr/bin/env python3
import cgi
from passlib.hash import sha256_crypt
from boto3 import resource
from uuid import uuid4
from datetime import datetime, timedelta

form = cgi.FieldStorage()

username = form['username'].value
password = form['password'].value
pwHash = sha256_crypt.encrypt(password)
sessionId = str(uuid4())
expiryDate = datetime.now() + timedelta(0,0,0,0,5,0,0)

r = resource('dynamodb')
usersTable = r.Table('Users')
usersTable.put_item(Item={'username':username, 'hash':pwHash, 'latestSession':sessionId})

sessionsTable = r.Table('Sessions')
sessionsTable.put_item(Item={'id':sessionId, 'username':username, 'active':True, 'expires':str(expiryDate)})

print('Set-Cookie: sessionId=' + sessionId + '; Path=/; Expires=' + expiryDate.strftime('%a, %d-%b-%Y %T GMT'))
print('Content-Type: application/json')
print('')

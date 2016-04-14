#!/usr/bin/env python3
import cgi
from passlib.hash import sha256_crypt

form = cgi.FieldStorage()

username = form['username'].value
password = form['password'].value
pwHash = sha256_crypt.encrypt(password)

print('Content-Type: application/json')
print('')
print(pwHash)

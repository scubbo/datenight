#!/usr/bin/env python3
import os
from http.cookies import SimpleCookie

print('Content-Type: application/json')
print('')

cookieString = os.environ['HTTP_COOKIE']
cookie = SimpleCookie(cookieString)
print('Your sessionId is ' + cookie['sessionId'].value)

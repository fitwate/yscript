#!/usr/bin/python3
# -*- coding: utf-8 -*-

import os

#
print('#')
os.system('who')
out=os.system('who')
print(out)

#
print('#')
output=os.popen('who')
print(output.read())


#!/usr/bin/python3
# -*- coding: utf-8 -*-

import json

print('\n###dict###')
mydict = {"test1":111,"test2":222}
print(mydict)
print(type(mydict))

print('\n###json###')
myjson = json.dumps(mydict)
print(myjson)
print(type(myjson))


print('\n###target###')
target = json.loads(myjson)
print(target)
print(type(target))

print('\n###dist out###')
print(target['test1'])

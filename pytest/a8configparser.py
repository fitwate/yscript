#!/usr/bin/python3
# -*- coding: utf-8 -*-
#

import configparser

config_set = {}
config = configparser.ConfigParser()
config.read('a8configparser.txt')

config_set['host'] = config.get("testdb", "host")
config_set['port'] = config.get("testdb", "port")
config_set['user'] = config.get("testdb", "user")
config_set['password'] = config.get("testdb", "password")
config_set['db'] = config.get("testdb", "db")
print(config_set)

config_set['abc_list'] = config.items("abclist")
print(config_set['abc_list'])

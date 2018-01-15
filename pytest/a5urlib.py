#!/usr/bin/python3
# -*- coding: utf-8 -*-

import urllib.request
import urllib.parse

def run_cmd(args):
    ips = args[0]
    cmd = args[1]

    url='http://www.test.com/inter.php'

    argument={ 'data':ips,
               'cmd':cmd
               }
    data = urllib.parse.urlencode(argument).encode(encoding='UTF8')

    respone = urllib.request.urlopen(url,data)
    return respone.read().decode('utf-8')

if __name__ == '__main__':
    teststr='{"test":"1.1.1.1","test2":"2.2.2.2"}'
    args = [teststr,'uptime']
    print(run_cmd(args))


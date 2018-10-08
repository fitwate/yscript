#!/usr/bin/python3
# -*- coding: utf-8 -*-

import hashlib
import requests

class get_md5:
    def __init__(self):
        print('learn class hashlib')

    def md5_key(self, url):
        r = requests.get(url)
        #md5 = hashlib.md5(r.text)
        md5 = hashlib.md5(r.content)
        print(md5.hexdigest())

if __name__ == '__main__':
    test=get_md5()
    test.md5_key('http://www.baidu.com/img/bd_logo1.png')

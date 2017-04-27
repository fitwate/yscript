#!/usr/bin/python3
# -*- coding: utf-8 -*-

#import urllib
import time
import datetime
class Test():
    times=30
    #data='vt=4'
    data=''
    
    def testSend(self):
        import http.client
        #headers = {"Content-type": "application/x-www-form-urlencoded","Accept": "text/plain","Connection":"Keep-Alive"}
        headers = {"Content-type": "application/x-www-form-urlencoded","Accept": "text/plain"}
        #conn = http.client.HTTPSConnection("tiger.sina.com.cn",5383)
        conn = http.client.HTTPSConnection("www.sina.com.cn")

        for i in range(self.times):
            #conn.request("POST", "/cfuser/u", self.data, headers)
            conn.request("GET", "/", self.data, headers)
            response = conn.getresponse()
            print(response.status, response.reason)
            resdata = response.read()
            #print(resdata.decode('utf-8'))
            print(i)
            print(datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')+'\n')

            time.sleep(1)
        conn.close()
if __name__ == "__main__":
    t=Test()
    t.testSend()

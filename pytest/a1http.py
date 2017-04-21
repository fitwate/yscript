#!/usr/bin/python3
# -*- coding: utf-8 -*-

#import urllib
import time
class Test():
    times=10
    #data='vt=4'
    data=''
    
    def testSend(self):
        import http.client
        headers = {"Content-type": "application/x-www-form-urlencoded","Accept": "text/plain","Connection":"Keep-Alive"}
        conn = http.client.HTTPConnection("127.0.0.1",80)
        for i in range(self.times):
            conn.request("POST", "/test", self.data, headers)
            response = conn.getresponse()
            print(response.status, response.reason)
            resdata = response.read()
            print(resdata.decode('utf-8'))
            time.sleep(1)
        conn.close()
if __name__ == "__main__":
    t=Test()
    t.testSend()

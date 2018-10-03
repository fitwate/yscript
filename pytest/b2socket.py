#!/usr/bin/python3
# -*- coding: utf-8 -*-

import socket
import sys

class socket_learn:
    def __init__(self):
        print('learn socket,class init')
        self.base()

    def base(self):
        local_hostname=socket.gethostname()
        print('local hostname: ' + local_hostname)

    def server(self):
        server = socket.socket() #获得socket实例
         
        server.bind(("localhost",50000)) #绑定ip port
        server.listen(3)  #开始监听
        while True:
            print("等待客户端的连接...")
            conn,addr = server.accept() #接受并建立与客户端的连接,程序在此处开始阻塞,只到有客户端连接进来...
            print("新连接:",addr )
            while True:
                data = conn.recv(1024)
                if not data:
                    print("客户端断开了...",addr )
                    break #这里断开就会再次回到第一次外层的loop
                print("收到消息:",data)
                conn.send(data.upper())
        server.close()
         
    def client(self):
        client = socket.socket()
         
        client.connect(("localhost",50000))
         
        while True:
            msg = input(">>:").strip()
            if msg == 'exit':break
            if len(msg) == 0:continue
            client.send( msg.encode("utf-8") )
         
            data = client.recv(1024)
            print("来自服务器:",data)


        print("退出socket客户端！")
        client.close()
    
if __name__ == '__main__':
    socket_test=socket_learn()
    #print(len(sys.argv))
    if len(sys.argv) == 2:
         if sys.argv[1] == 'server':
             while True:
                 socket_test.server()
         elif sys.argv[1] == 'client':
             socket_test.client()
         else:
             print('input err,you can input server/client')
    else:
        print('no start any!')

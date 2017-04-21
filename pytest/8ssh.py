#!/usr/bin/python3
# -*- coding: utf-8 -*-

import paramiko
import threading
import datetime
#import os

def ssh2(ip,username,passwd,cmd):
    try:
        ssh = paramiko.SSHClient()
        ssh.set_missing_host_key_policy(paramiko.AutoAddPolicy())
        ssh.connect(ip,22,username,passwd,timeout=5)
        for m in cmd:
            stdin, stdout, stderr = ssh.exec_command(m)
            stdin.write("Y")   #简单交互，输入 ‘Y’ 
            out = stdout.readlines()
            #屏幕输出
            #for o in out:
            #    print(o),
        print('%s\tOK\n'%(username))
        file = open('8ssh_res.txt', 'a')
        file.write('%s\tOK\n'%(username))
        file.close()
        ssh.close()
    except :
        print ('%s\tError\n'%(username))
        file = open('8ssh_res.txt', 'a')
        file.write('%s\tError\n'%(username))
        file.close()
        ssh.close()


if __name__=='__main__':
    #cmd = ['cal','echo hello!']#你要执行的命令列表
    cmd = ['echo hello!']#你要执行的命令列表
    threads = []
    ip = '10.210.128.187'
    print('Begin......')
    file = open('8ssh_res.txt', 'w')
    file.write('start: '+datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')+'\n')
    file.close()

    with open('8passfile') as f:
        user_list = f.readlines()
    for userpass in user_list:
        username = userpass.split('=')[0]
        passwd = userpass.split('=')[1].strip('\n')
        a=threading.Thread(target=ssh2,args=(ip,username,passwd,cmd))
	#a=threading.Thread(target=ssh2,args=(ip,userpass.split('=')[0],userpass.split('=')[1].strip('\n'),cmd))
        #ssh2(ip,username,passwd,cmd)
        a.start()

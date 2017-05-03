#!/usr/bin/python3
# -*- coding: utf-8 -*-

import paramiko
import datetime
import sys
import os

#username keyfile

def ssh2(ip,username,key,cmd):
    try:
        ssh = paramiko.SSHClient()
        ssh.set_missing_host_key_policy(paramiko.AutoAddPolicy())
        ssh.connect(ip,22,username,pkey=key,timeout=5)
        print ('%s\t%s\tLogin_ok\n'%(username,ip))
        login_check='ok'
    except :
        login_check='Error'
        print ('%s\t%s\tLogin_Error\n'%(username,ip))
        file = open('8ssh_key_res.txt', 'a')
        nowtime=datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')
        file.write('%s\t%s\tLogin_Error\t%s\n'%(username,ip,nowtime))
        file.close()
        ssh.close()
    if login_check=='ok':
        try:
            out=[]
            err=[]
            for m in cmd:
                now_out=[]
                now_err=[]
                stdin, stdout, stderr = ssh.exec_command(m,timeout=10.0)
                stdin.write("Y")   #简单交互，输入 ‘Y’ 
                now_out=stdout.readlines()
                now_err=stderr.readlines()
                out = out + now_out
                err = err + now_err
                if not now_out:
                    out = out + ['Return_empty ']
                if not now_err:
                    err = err + ['no_error ']
    
            print('%s\t%s\tCommand_OK\n'%(username,ip))
            file = open('8ssh_key_res.txt', 'a')
            res=""
            res_err=""
            for o in out:
                res=res+o.replace("\n", " ")+" "
            for r in err:
                res_err=res_err+r.replace("\n", " ")+" "
            res=res.strip('\n')+" Err:"+res_err
            file.write('%s\t%s\t%s\n'%(username,ip,res.strip('\n')))
            file.close()
            ssh.close()
        except :
            print ('%s\tCommand_Error\n'%(username))
            file = open('8ssh_key_res.txt', 'a')
            nowtime=datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')
            file.write('%s\t%s\tCommand_Error\t%s\n'%(username,ip,nowtime))
            file.close()
            ssh.close()


if __name__=='__main__':
    cmd = ['hostname']#你要执行的命令列表
    #ip = '1.1.1.1'
    username='test'

    print('Begin......')

    file = open('8ssh_key_res.txt', 'w')
    file.write('start: '+datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')+'\n')
    file.close()
    
    keyfile="id_rsa"
    if os.path.exists(keyfile):
        key = paramiko.RSAKey.from_private_key_file(keyfile)
    else:
        print(keyfile + " not exits!")
        exit()

    with open('8ipfile') as f:
        ip_list = f.readlines()
    for ipinfo in ip_list:
        ip=ipinfo.strip('\n')
        ssh2(ip,username,key,cmd)

    file = open('8ssh_key_res.txt', 'a')
    file.write('end: '+datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')+'\n')
    file.close()
    

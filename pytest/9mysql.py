#!/usr/bin/python3
# -*- coding: utf-8 -*-

#sudo pip3 install PyMySQL
import pymysql

def mysql():
    try:
        conn = pymysql.connect(host='127.0.0.1',port=3306,user='ysu',passwd='ysp',db='user')
        cur = conn.cursor()
        cur.execute("SELECT username,password from user")
        ##for row in cur.fetchall():
        ##    print(row)
        ####print(cur.fetchone())
        data=cur.fetchall()
        print(type(data))
        print()
        print(data)
        print()
        print(data[0])
        print()
        print(data[0][1])
        print()
        cur.close()
        conn.close()

    except:
        print('mysql error')

if __name__ == '__main__':
    mysql()

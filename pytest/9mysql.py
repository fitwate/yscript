#!/usr/bin/python3
# -*- coding: utf-8 -*-

#sudo pip3 install PyMySQL
import pymysql

def mysql():
    try:
        conn = pymysql.connect(host='127.0.0.1',port=3306,user='test_user',passwd='test_pass',db='mysql')
        cur = conn.cursor()
        cur.execute("SELECT host,user from user")
        ##for row in cur.fetchall():
        ##    print(row)
        ####print(cur.fetchone())
        data=cur.fetchall()
        print(data)
        print(data[0])
        print(data[0][1])
        cur.close()
        conn.close()

    except:
        print('mysql error')

if __name__ == '__main__':
    mysql()

#!/usr/bin/python3
# -*- coding: utf-8 -*-

def base():
    num=1+1
    string='1'
    print(type(string))
    print(num)

    if  isinstance ( num,int):
        print(str(num) + ' is int typ')
    else:
        print(str(num) + ' is not  int typ')


    # 111#
    
    words = 'words'*3
    print(words)
    print(len(words))
    print(words[0])
    print(words[-1])

if __name__ == '__main__':
    base()

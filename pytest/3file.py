#!/usr/bin/python3
# -*- coding: utf-8 -*-
# file
def file():
    file = open('3file.txt', 'w')
    file.write('Hello World')
    file.close()

    file = open('3file.txt', 'r')
    print(file.read())
    file.close()

if __name__ == '__main__':
    file()

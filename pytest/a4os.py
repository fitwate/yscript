#!/usr/bin/python3
# -*- coding: utf-8 -*-

def local_cmd():
    import os

    #
    print('#')
    os.system('who')
    out=os.system('who')
    print(out)

    #
    print('dir test start')
    print(os.path.realpath(__file__))
    print(os.path.split(os.path.realpath(__file__)))
    print(os.path.split(os.path.realpath(__file__))[0])
    print(os.path.sep)
    print('dir test end')
    
    #
    print('#')
    output=os.popen('who')
    print(output.read())

if __name__ == '__main__':
   local_cmd()

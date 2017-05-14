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
    print('#')
    output=os.popen('who')
    print(output.read())

if __name__ == '__main__':
   local_cmd()

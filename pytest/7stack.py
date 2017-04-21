#!/usr/bin/python3
# -*- coding: utf-8 -*-

stack = []

def stack_push():
    val = input("pussh val:")
    stack.append(val)

def stack_pop():
    if(len(stack) > 0):
        return stack.pop(-1)
    else:
        return None

def stack_show():
    print(stack)

while(True):
    cmd = str(input("Enter cmd:"))

    if cmd == 'p':
        stack_push()
    elif(cmd == 'o'):
        print(stack_pop())
    elif(cmd == 's'):
        stack_show()
    elif(cmd == 'q'):
        break
    else:
        print("Please Enter 'p' 'o' 's' 'q'")

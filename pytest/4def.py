#!/usr/bin/python3
# -*- coding: utf-8 -*-
# function

def ysceshi (test1, test2=2):
    print(str(test1), '+', str(test2), '=', int(test1)+int(test2))
    return int(test1)+int(test2)

print(ysceshi(1,1))
ysceshi(1, 1)

#
def account_login():
    password = input("password:")
    #print(password)
    password_correct = password == '123456'
    #print(password_correct);

    if password_correct:
        print('Login Sucess!')
    else:
        print("Wrong password or invalid input!")
        account_login()

account_login()

#
def is_even(x):
    if x == 0:
        return True
    else:
        a=str(x) + 'a'
        print(a)
        return is_odd(x-1)

def is_odd(x):
    b=str(x) + 'b'
    print (b)
    return not is_even(x)

if __name__ == '__main__':
    print(is_odd(1))
    print(is_even(1))

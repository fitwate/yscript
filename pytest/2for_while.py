#!/usr/bin/python3
# -*- coding: utf-8 -*-
#loop
def for_while():
    for every_letter in 'Hello world':
        print(every_letter)
    
    for num in range(1,11):
        print(str(num)+' +1= ', num + 1)
    
    for i in range(1,10):
        for j in range(1,10):
            print( '{} x {} = {} '.format(i, j, i*j))
    
    count = 0
    while True:
        print('Repeat this line !', count)
        count = count + 1
        if count == 5:
            break
if __name__ == '__main__':
    for_while()    

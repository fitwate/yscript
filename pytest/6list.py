#!/usr/bin/python3
# -*- coding: utf-8 -*-

def list_l():
    testlist=[1,2,3,3]
    print(len(testlist))
    print(min(testlist))
    print(max(testlist))
    
    testlist.append(4)
    print(testlist)
    
    print(testlist.count(3))
    print(testlist.count(2))
    
    testlistb=list('ceshi')
    print(testlistb)
    
    print(testlist+testlistb)
    print(testlist)
    
    testlist.extend(testlistb)
    print(testlist)
    
    print(testlistb.index('c'))
    print(testlistb.index('e'))
    
    testlistb.insert(2,"test")
    print(testlistb)
    
    print(testlistb.pop())
    print(testlistb.pop(1))
    print(testlistb)
    
    print(testlistb.remove('s'))
    print(testlistb)
    
    testlistb.reverse()
    print(testlistb)
    
    testlistb.sort()
    print(testlistb)

if __name__ == '__main__':
    list_l()
    

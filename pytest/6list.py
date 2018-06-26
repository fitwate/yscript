#!/usr/bin/python3
# -*- coding: utf-8 -*-

def list_l():
    print('def list_l start ...')
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

    print([x+1 for x in [1,2,3,4,5,6,7,8,9,10] if x%2==0])
    print([(x,y) for x in [1,2,3,4] for y in ['a','b','c','d']])


def dict_l():
    print('\ndef dict_l start ...')
    dict_a={'1':'a','2':'b','3':'c'}
    
    for v in dict_a.values():
        print(v)

    for k in dict_a.keys():
        print(k)

#
    print(dict_a.items())
    for k,v in dict_a.items():
        print(k,v)

if __name__ == '__main__':
    list_l()
    dict_l()
#a 

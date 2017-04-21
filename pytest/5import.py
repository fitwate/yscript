#!/usr/bin/python3
# -*- coding: utf-8 -*-
def import_l():
    import random
    print(random.randrange(1, 7))
    
    #
    import sys
    print(sys.path)
    print(sys.path[0])
    print(sys.path[3])

if __name__ == '__main__':
    import_l()

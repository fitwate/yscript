#!/usr/bin/python3
# -*- coding: utf-8 -*-

import multiprocessing
import time

class test:
    def __init__(self):
        print('learn class')

    def action(self,data,sleep_time):
        if data:
            time.sleep(sleep_time)
            print(data)
        else:
            print('No, data!')

if __name__ == '__main__':
    tests=test()

    p1 = multiprocessing.Process(target=tests.action, args=('p1_output',10,))
    p1.start()
    #p1.join()
    print('p1_main')

    print('##########')    

    p2 = multiprocessing.Process(target=tests.action, args=('p2_output',30,))
    p2.start()
    p2.join(timeout=60)
    print('p2_main')

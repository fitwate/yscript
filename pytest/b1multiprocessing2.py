#!/usr/bin/python3
# -*- coding: utf-8 -*-

import asyncio
import random
import time
import multiprocessing

def mytest(id):
    process_time = random.randint(1, 5)
    time.sleep(process_time)
    print("子进程: {}, 执行完毕。用时： {} 秒".format(id, process_time))

pro_num=5

p = multiprocessing.Pool(processes=pro_num)

for i in range(pro_num):
    p.apply_async(mytest,[i])
    #p.apply_async(mytest,[i]).get()
    #p.apply(MyCoroutine,[i])

p.close()
p.join()

print('test ...')

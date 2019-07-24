#!/usr/bin/python3
# -*- coding: utf-8 -*-

#import asyncio
import random
import time
import datetime
import multiprocessing

def mytest(id):
    process_time = random.randint(1, 5)
    time.sleep(process_time)
    time.sleep(1)
    time_now = datetime.datetime.now()
    print(time_now)
    #print("子进程: {}, 执行完毕。用时： {} 秒".format(id, process_time))
    print("子进程: {}, 执行完毕".format(id))
    return 1

pro_num=3
pro_num_sum=9

p = multiprocessing.Pool(processes=pro_num)
tmp_res=[]
for i in range(pro_num_sum):
    tmp_res.append(p.apply_async(mytest,[i]))
    #p.apply_async(mytest,[i]).get()
    #p.apply(MyCoroutine,[i])

p.close()
p.join()
for i in tmp_res:
    print(i.get())

print('test ...')

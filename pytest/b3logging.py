#!/usr/bin/python3
# -*- coding: utf-8 -*-

import logging
import socket
import sys
import logging.handlers

class logging_learn:
    def __init__(self):
        print('learn class logging')

    def logging(self, content, level):
        logpath = '/var/log/b3logging.log'
        logger = logging.getLogger(socket.gethostname())  #logger 是 logging模块中最基础的对象，用logging.getLogger(name)方法进行初始化，name可以不填
        formatter = logging.Formatter(
            '%(asctime)s %(name)s %(levelname)s: %(message)s')
        logger.setLevel(level=logging.INFO)  #指定最低的日志级别，低于lel的级别将被忽略。debug是最低的内置级别，critical为最高
        handler = logging.handlers.TimedRotatingFileHandler(
            '{0}'.format(logpath), when='midnight', interval=1, backupCount=60)  #切割日志
        handler.suffix = "_%Y%m%d.log"    #切割后的日志设置后缀
        handler.setLevel(logging.INFO)   #指定被处理的信息级别，低于lel级别的信息将被忽略
        handler.setFormatter(formatter)    #给这个handler选择一个格式 formatter
        logger.addHandler(handler)    #增加或删除指定的handler
    
        try:
            logger.log(level, content)
            logger.removeHandler(handler)
            return 0
        except Exception as e:
            print(e)
            return 1
    

if __name__ == '__main__':
    test=logging_learn()
    log_content = sys.argv[1]
    log_level = int(sys.argv[2])
    test.logging(log_content,log_level)

#!/usr/bin/python3
# -*- coding: utf-8 -*-

import os
import time
import shutil

f_time = time.strftime("%Y%m%d%H%M%S", time.localtime())
bak='/var/tmp/bak';
tmpbak='/tmp/tmpbak'
tarfile=bak + '/test_bak_' + f_time

if not os.path.exists(bak):
    os.makedirs(bak)

if not os.path.exists(tmpbak):
    os.makedirs(tmpbak)

shutil.rmtree(tmpbak)
shutil.copytree('/home/',tmpbak)
shutil.make_archive(tarfile,'bztar',tmpbak);
shutil.rmtree(tmpbak)

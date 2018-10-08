#!/usr/bin/python3
# -*- coding: utf-8 -*-

import tarfile
import os

class get_tarfile:
    def __init__(self):
        print('learn class tarfile')
        self.tarfilename='/var/tmp/test.tar.gz'

    def make_tarfile(self):
        tar_src='/var/tmp/tar_src'

        if not os.path.exists(tar_src):
            os.makedirs(tar_src)

        os.system("touch   " + tar_src + "/1")
        os.system("touch   " + tar_src + "/2")
        os.system("touch   " + tar_src + "/3")

        tar = tarfile.open(self.tarfilename,'w:gz')
        for root ,dir,files in os.walk(tar_src):  
            for file in files:  
                fullpath = os.path.join(root,file)  
                #tar.add(fullpath)  
                tar.add(fullpath, arcname=file)  
        tar.close()

    def unmake_tarfile(self):
        tar_dst='/var/tmp/tar_dst' 

        if not os.path.exists(tar_dst):
            os.makedirs(tar_dst)

        utar = tarfile.open(self.tarfilename)
        utar.extractall(path=tar_dst)
        utar.close()

#   def utar_memory_file(self):
#       r = requests.get(tar_pkg_url)
#       tar = tarfile.open(fileobj=StringIO.StringIO(r.content))
#       tar.extractall(path=tarpath)

if __name__ == '__main__':
    test=get_tarfile()
    test.make_tarfile()
    test.unmake_tarfile()

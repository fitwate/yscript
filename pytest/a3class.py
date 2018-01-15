#!/usr/bin/python3
# -*- coding: utf-8 -*-

#__metalass__ = type
class bird:
    def __init__(self):
        self.hungry = True

    def eat(self):
        if self.hungry:
            print('Aaaaah')
            self.hungry = False
        else:
            print('No, thanks!')


class songbird(bird):
    def __init__(self):
        #bird.__init__(self)
        super(songbird,self).__init__()
        self.sound = 'squawk!'
    def sing(self):
        print(self.sound)

if __name__ == '__main__':
    sb = songbird()
    sb.sing()
    sb.eat()
    sb.eat()


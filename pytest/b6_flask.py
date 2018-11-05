#!/usr/bin/python3
# -*- coding: utf-8 -*-

from flask import Flask, render_template, request, abort

app = Flask(__name__)

@app.route('/hello')

def hello_world():
    return 'Hello World!'

@app.route('/')

def index():
    return render_template('b6_flask.html',testname='testuser')


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8080)

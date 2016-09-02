#!/usr/bin/python3

try:
    fh = open('xlines.txt')
    for line in fh.readlines():
        print(line)
except IOError as e:
    print("Something bad happened({}).".format(e))

print("After badness")

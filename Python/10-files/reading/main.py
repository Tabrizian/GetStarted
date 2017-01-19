#!/usr/bin/python3

def main():
    infile = open('lines.txt', 'r')
    for line in infile:
        print(line, end = '')

if __name__ == "__main__": main()

#!/usr/bin/python3

def main():
    buffersize = 50000
    infile = open('obama.png', 'rb')
    outfile = open('obama-copy.png', 'wb')
    buffer = infile.read(buffersize)
    while len(buffer):
        outfile.write(buffer)
        print('.', end = '')
        buffer = infile.read(buffersize)

    print()
    print('Done.')

if __name__ == "__main__": main()

#!/usr/bin/python3

class Egg:
    def __init__(self, kind = "fried"):
        self.kind = kind

    def whatKind(self):
        return self.kind

def main():
    egg = Egg(kind = "What")
    print(egg.whatKind())

if __name__ == "__main__" : main()


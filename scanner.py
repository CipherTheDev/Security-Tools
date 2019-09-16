from socket import *
from sys import argv
import os


"""
AUTHOR: PARSA ZARRIN
COPYRIGHT: GPLV3
FEEL FREE TO FORK THIS AND/OR DISTRIBUTE THIS BUT UNDER THE OPEN SOURCE LICENSING SCHEME THE ORIGINAL AUTHOR MUST BE MENTIONED.

ANY UNAUTHORIZED USAGE OF THIS DONE MEANS I AM NOT RESPONSIBLE FOR YOUR ACTIONS AS THIS IS DONE FOR LAWFUL PURPOSES.
"""
class Scan_Site():
    def __init__(self):
        self.IP = self.IP
        self.PORT = self.PORT
        self.DOC = self.DOC

    def main(self):
        print("Welcome aboard the scanner!")
        self.IP = argv[1]
        self.PORT = argv[2]
        if self.IP == "http://" or self.IP == "https://":
            print("Are you sure that you wish to scan this server? ")
        elif  self.IP ==  "yes":
            print("SCANNING WEBSITE...")
            socket.getsockname(self.IP)
    def Docs(self):
        Dcs = input("Do you wish to see the documentation?")
        if "yes" in Dcs:
            print("[+] Showing documentation", end="\n\t")


SS = Scan_Site()
if SS.Docs():
    print(SS.__doc__)
if __name__ == '__main__':
    SS.main()

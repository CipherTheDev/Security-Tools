from socket import *
from sys import argv
import os
from requests import * #for now

"""
AUTHOR: PARSA ZARRIN
COPYRIGHT: GPLV3
FEEL FREE TO FORK THIS AND/OR DISTRIBUTE THIS BUT UNDER THE OPEN SOURCE LICENSING SCHEME THE ORIGINAL AUTHOR MUST BE MENTIONED.
ANY UNAUTHORIZED USAGE OF THIS DONE MEANS I AM NOT RESPONSIBLE FOR YOUR ACTIONS AS THIS IS DONE FOR LAWFUL PURPOSES.

UPDATE OF 2021: PLEASE NOTE, THIS SCRIPT IS OUT OF DATE, THERE WILL BE LITTLE FUTURE RELEASES OF THIS
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
        Dcs = input(str("Do you wish to see the documentation?"))
        if "yes" in Dcs:
            print("[+] Showing documentation", end="\n\t")
            print(SS.Docs())
            pass
        elif "no" in Dcs:
            print("[-] Exiting..." , end="|")
            sys.exit(1)
print("""[+]
𝓜𝓪𝓭𝓮 𝓟𝓸𝓼𝓼𝓲𝓫𝓵𝓮 𝓫𝔂 𝓹𝓪𝓻𝓼𝓪𝓽𝓱𝓮𝓭𝓮𝓿 , 
[!] If you wish to have the full program please email me at ciphersec4@gmail.com
This will be soon copyrighted under ACT 1968
This is a part of 	𝓣𝓱3𝓓3𝓼𝓽0𝔂𝓮𝓻 Please note all of these are copyrighted under Apache for now and you may use it until the full release of 	𝓣𝓱3𝓓3𝓼𝓽0𝔂𝓮𝓻
~Developer
""")

SS = Scan_Site()
if SS.Docs():
    print(SS.__doc__)
if __name__ == '__main__':
    SS.main()

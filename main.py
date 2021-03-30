import os, sys, argparse
import socket, http
import datetime, time


# import requests
class Command():
    def __init__(self):
        self.date = datetime.date.today()
        self.IPv4 = "172"
        self.sock  = socket.socket(socket.SOCK_STREAM, socket.AF_INET)
        self.NetWrK = socket.socket(socket.SOCK_STREAM, socket.AF_INET)
        self.File = None
        pass

    def File_Access(self):
        pass

    def Net_Inbound(self):
        try:
            self.NetWrK.bind((self.IPv4 , 8080))
            self.NetWrK.listen(1)
            if self.NetWrK.listen(1):
                print("[+] Creating a reverse shell... Hopefully the hacker gets his/hers taste")
                command = '+'
                hacker_access = input("Enter commands here: --> ")
                if command in hacker_access:
                    pass
                #Add more functionalities here
        except socket.error as s_error:
            print("[!] An error whilst creating shell has occured", s_error)
            return None
        except socket.timeout as s_timeout:
            print("[!] A timeout error has occurred, this may be the client's end and/or your connectivity, trying again")
            self.Net_Inbound()

    def RAM_Measurement(self):
        print("Measuring the available RAM")
        self.File_Access()

    def Buffer_Ovrflow(self):
        print("Please wait a minute for the Buffer Overflow menu to display")
        time.sleep(10000)
        print("Buffer Overflow menu: -s STACKOVERFLOW , -H HEAP OVERFLOW  , -D DEFAULT ATTACK METHOD, HAIL MARY")

    def Denial_Service(self):
        pass

    def Web_Crawler(self):
        print("Usage: D3sTroYer.py https://www.example.com/  -g  -o ~/root/Desktop/example.html")
        pass


class Interface(Command):

    def __init__(self):
        pass

    def port_scn(self) -> str:
        self.prsr = None
        prsr = argparse.ArgumentParser()
        self.arg = prsr
        prsr.add_argument('--ip', metavar='IPv4/IPv6', type=str, help="IPv4/v6 of victim")
        prsr.add_argument('-d', metavar='Denial Of Sevice or Distributed Denial Of Service', type=str,
                          help="Usage: Denial Of Service")
        prsr.add_argument('-nmp', metavar='Network Mapping', type=int,
                          help="Usage: Provides Network Mapping functionalities")
        prsr.add_argument('-g', metavar='Usage: ', type=str, help="Usage: ")
        prsr.print_help()
        self.arg = prsr.parse_args()
        pass


test = Interface()
test.port_scn()
""""
the following is the documentation for this command and control script,
please note that if any modifications under the licence of GPLv3, therefore the original author must be mentioned
Author details,
Name: Parsa Zarrin
Social Media: hackforums.com/TheHiddenCoder, instagram.com/parsathedev
Location: Australia
Purpose of script: To aid 
"""

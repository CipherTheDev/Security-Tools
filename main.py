import os , sys , argparse
import socket , http
import datetime , time
#import requests
class Command():
    def __init__(self):
        self.date = datetime.date.today()
        self.IPv4 = "172"
        self.sock = socket.socket(socket.SOCK_STREAM , socket.AF_INET)
        self.File = None
        pass

    def File_Access(self):
        pass

    def Net_Inbound(self):
        pass

    def RAM_Measurement(self):
        print("Measuring the available RAM")
        pass
    def Buffer_Ovrflow(self):
        print("Please wait a minute for the Buffer Overflow menu to display")
        time.sleep(10000)
        print("Buffer Overflow menu: -s STACKOVERFLOW , -H HEAP OVERFLOW  , -D DEFAULT ATTACK METHOD, HAIL MARY")
        pass

    def Denial_Service(self):
        pass

    def Web_Crawler(self):
        print("Usage: D3sTroYer.py https://www.example.com/  -g  -o ~/root/Desktop/example.html")
        pass


""""
the following is the documentation for this command and control script,
please note that if any modifications under the licence of GPLv3, therefore the original author must be mentioned
Author details,

Name: Parsa Zarrin

Social Media: hackforums.com/TheHiddenCoder, instagram.com/parsathedev

Location: Australia

Purpose of script: To aid 
"""

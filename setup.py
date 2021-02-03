from setuptools import *
import time
import requests
import argparse
import sys , os
"""
Below is the setup that may require some API's and/or wrappers.
##############################################################
"""

try:
    print("Starting setup.py ... please wait")
    #time.sleep(20)
    f = open("Output.html" , "w")
    f.write("<h1>Setup completed</h1>")
    f.writelines("Once completed, please head over the CLI.\nOtherwise find the relavent information below")
    f.close()
    print("Setup has been completed. Refer towards the manual")

except Exception as e:
    print("An error has caused the setup to hault. Please check below." + e)
    print('[+] Installation has been repeated')

    f.open("reinstall.htm" , "w+a")
    with f:
        f.writelines("<style>p{ color: green;} body{background-image: https://img1.goodfon.com/original/1920x1080/0/d2/cvety-zelen-trava-lug-pole.jpg?d=1}")

class Gather_Report():
    def __init__(self):
        self.formname = None
        self.arguments = None 
   
    pass

    def Show_Output(self):
        print("use the following arguments in order to open the report")
        print("-h html , -t text , -w .docx and/or default by web layout")
        parser = argparse.ArgumentParser(description="Opens within HTML format" , usage="" , prog="")
        parser.add_argument('-ho' , '--html' ,  type=str , metavar='', required=True , help='Open\'s within HTML')
        parser.add_argument('-t' ,'--text' , type=str , metavar='',required=True, help='Open\'s within a text file')
        parser.add_argument('-w' , '--web' , type=str , metavar='', required=True , help='Open\'s within a default web layout. REQUIRES NETWORK CONNECTION')
        args = parser.parse_args()
        try:
            print(args.html)
            print(args.text)
            print(args.web)
        except:
            print("Wrong value and/or application crashed.")
        pass
class Print_report(Gather_Report):
    print(""""
    use the following arguemnts to print the report either in a browser and/or text editor
    
    -o ~/root/example.html , -ho PRINTS THE HTML DOCUMENT,   -d PRINTS DEFAULT FORMAT IN WEB LAYOUT
    """)
    
    pass



Get_RPT = Gather_Report()
Get_RPT.Show_Output()

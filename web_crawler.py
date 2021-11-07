from setuptools import *
import time
import requests
import argparse
import sys , os
from requests.exceptions import HTTPError
"""
Below is the setup that may require some API's and/or wrappers.
##############################################################
"""

try:
    print("Starting setup.py ... please wait")
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
        parser.add_argument('-ho' , '--html' ,  type=str , metavar='', required=False , help='Open\'s within HTML')
        parser.add_argument('-t' ,'--text' , type=str , metavar='',required=True, help='Open\'s within a text file')
        parser.add_argument('-w' , '--web' , type=str , metavar='', required=False , help='Open\'s within a default web layout. REQUIRES NETWORK CONNECTION')
        parser.add_argument('-c' , '--cli' , type=str , metavar='', required=False , help='Open\'s onto a command line environment, PowerShell required.')
        args = parser.parse_args()
        try:
            if args.html == None:
                print("No HTML file was created")
            print(args.text)
            if args.web == None:
                pass
            elif args.web:
               pass
        except:
            print("Wrong value and/or application crashed.")
        pass
#Fix the requirement of more than one input
    def Inspect_Site(self):
        try:
            req = requests.get('', stream=True)
            req_status = req
            req_status.encoding
            req_status.status_code
            req_json_data = req
            req_json_data.json()
            print(f'Are you certain this {req.url} is correct?')
            print(req.text)
            if req_status == 404:
                print(f'The following status code returned 404')
            if req_status == 200:
                print(f'The following status code returned 200')
            elif req_status == 204:
                print(f'The following status code returned 204')
            elif req_status == 502:
                print(f'Permission denied, status code: 502')
            elif req_status == 202:
                print(f'The following status code returned 202')
                if req_status == 200:
                    print(f'The following status code returned 200, website is active.')
            elif req_status == 203:
                print(f'The following status 203 justifies the website has been moved to a different location')
                time.sleep(30)
                print(f'\n\nThe following is the website content:\n\t{req.text}')
            
            
        except HTTPError as error_404:
            print(f'An HTTP has occurred {error_404}')
        except  Exception as err:
            print(f"Unrelated error has occured, please read the error status: {err}")
        pass
class Print_report(Gather_Report):
    print(""""
    use the following arguments to print the report either in a browser and/or text editor
    
    -o ~/root/example.html , -ho PRINTS THE HTML DOCUMENT,   -d PRINTS DEFAULT FORMAT IN WEB LAYOUT
    """)

    pass

"""
############################################
USE THE FOLLOWING CODE UNDER INSPECT_SITE() 
TO TROUBLESHOOT AND/OR MODIFY TO MEET YOUR OWN REQUIREMENTS
~PZarrin
"""

Get_RPT = Gather_Report()
Get_RPT.Show_Output()

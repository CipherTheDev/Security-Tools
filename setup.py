from setuptools import *
import time
import requests
"""
Below is the setup that may require some API's and/or wrappers.
##############################################################
"""

try:
    print("Starting setup.py ... please wait")
    time.sleep(20)
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
    pass

class Print_report(Gather_Report):
    pass



Get_RPT = Gather_Report()
if __name__  == "__main__":

Get_RPT()

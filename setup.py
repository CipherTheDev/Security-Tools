from setuptools import *
import time
"""
Below is the setup that may require some API's and/or wrappers.
##############################################################
"""

try:
    print("Starting setup.py ... please wait")
    time.sleep(20)
    f = open("Output.html" , "w")
    f.write("<h1>Setup completed</h1>")


except Exception as e:
    print("An error has caused the setup to hault. Please check below." + e)

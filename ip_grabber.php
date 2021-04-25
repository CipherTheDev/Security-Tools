<?php
$IP = $_SERVER['REMOTE_ADDR'];
$proto = $_SERVER['SERVER_PROTOCOL']; 
$BROWSER = $_SERVER['HTTP_USER_AGENT'];
echo "<html> <head><title>YouTube</title><meta charset='utf-8'></head>";
echo "<body background= background.jpg><script>console.log('Your IP has been logged. Enjoy it'); console.log('$BROWSER is your Browser');</script>";
$Time = $_SERVER['REQUEST_TIME'];
$SOFTWARE = $_SERVER['SERVER_SOFTWARE'];
$HTTACCEPT = $_SERVER['HTTP_ACCEPT'];
$REQMETH = $_SERVER['REQUEST_METHOD'];
$fh = fopen('log.txt', 'a');
if(empty($fh)){
fclose($fh);
}
for ($i = 0; $i <= $fh;$i++){
    fwrite($fh , $IP);
    fwrite($fh, "\n$proto");   
    fwrite($fh, "\t$REQMETH");
}
fclose($fh);
echo "<script>console.log( '$IP Is your IP address and your protocol: $proto');</script>";
function dectorate(){
  echo "<style>body{background-color:#24CC54; } .host-information{ background-color:#DD646E; } p{font-family: sans-serif;} pre{color: green;}</style>";
  echo "<script></script>";
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
    $ENCODING = $_SERVER['HTTP_ACCEPT_ENCODING'];
    $language_used = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$fh = fopen("information.txt" ,"a");
fwrite($fh, "\nHeader:\n");
fwrite($fh , $HTTACCEPT);
fwrite($fh , $KCP);
fclose($fh);
$fe = fopen("additional_information.txt" ,"a");
fwrite($fe, "\tThe additional information given is listed below\n");
fwrite($fe, $ENCODING, 1);
fwrite($fe, "Above is the encoding used for the client.\n");
fwrite($fe, "Below Is the langauge that was used within the client browser.");
fwrite($fe , $language_used , 1);
echo "<script>document.write('<p>The language and encoding that you have is $ENCODING for encoding data and $language_used for your browser language;</p>'); console.log('The language used in your browser: $language_used and the encoding used: $ENCODING');</script>";

};
Get_Header();
    function Serv_Port(){
        $SERVER_PORT = $_SERVER['SERVER_PORT'];
        
        
        echo "<script>console.log('The Port you are connected to $SERVER_PORT');</script>";
        //echo "<script>alert('your information has been stored.');</script>";
       
        
    }
    Serv_Port();

function prank_video(){
	//Soon to be updated
	
}
function set_ckies(){
$wrcokie = setcookie("SetThisCookieAsYourOwn" , "InsertCookieValueHere");

}
set_ckies();
?>

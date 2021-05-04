<?php
$IP = $_SERVER['REMOTE_ADDR'];
$proto = $_SERVER['SERVER_PROTOCOL']; 
$BROWSER = $_SERVER['HTTP_USER_AGENT'];
echo "<html> <head><title>YouTube</title><meta charset='utf-8'></head>";
echo "<body background= background.jpg><script>console.log('Your IP has been logged. Enjoy it'); console.log('$BROWSER is your Browser');</script>";
$Time = $_SERVER['REQUEST_TIME'];
$SOFTWARE = $_SERVER['SERVER_SOFTWARE'];
$HTTACCEPT = $_SERVER['HTTP_ACCEPT'];
//$REQMETH = $_SERVER['REQUEST_METHOD'];
$fh = fopen('log.txt', 'a');
if(empty($fh)){
fclose($fh);
}
for ($i = 0; $i <= $fh;$i++){
    fwrite($fh , $IP);
    fwrite($fh, "\n$proto");   
    //fwrite($fh, "\t$REQMETH");
}
fclose($fh);
echo "<script>console.log( '$IP Is your IP address and your protocol: $proto');</script>";
function dectorate(){
  echo "<style>body{background-color:#24CC54; } .host-information{ background-color:#DD646E; } p{font-family: sans-serif; color: lightblue;} pre{color: green;}</style>";
  echo "<script></script>";
}
dectorate();
function Browser(){
    $BROWSER = $_SERVER['HTTP_USER_AGENT'];
    $fh = fopen("information.txt" ,"a");
    fwrite($fh, "\nBrowser information:\n ");
    fwrite($fh , $BROWSER);
    fclose($fh);
    
    echo "<script></script>";
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
fwrite($fe, "\nThe additional information given is listed below\n");
fwrite($fe, $ENCODING, 1);
fwrite($fe, "\nAbove is the encoding used for the client.\n");
fwrite($fe, "\nBelow Is the langauge that was used within the client browser.");
fwrite($fe , $language_used);
echo "<script>document.write('<p>The language and encoding that you have is $ENCODING for encoding data and $language_used for your browser language;</p>'); console.log('The language used in your browser: $language_used and the encoding used: $ENCODING');</script>";

};
Get_Header();
    function Serv_Port(){
        $SERVER_PORT = $_SERVER['SERVER_PORT'];
        
        
        echo "<script>console.log('The Port you are connected to $SERVER_PORT');</script>";
        //echo "<script>alert('your information has been stored.');</script>";
    }


    Serv_Port();

function get_access(){
	$SERVIP = $_SERVER['SERVER_ADDR'];
    echo "<script>console.log('The servers IP is $SERVIP and a remote conn has been made');</script>";

    $script_run = shell_exec('start explorer.exe');
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        //system($commands." > NUL");
        
    }
    $explorer_path = "C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe";
    exec(" echo 'ipconfig /all' > ip_info.txt");
    system("$script_run");

}
get_access();
function gather_emails(){
    $IP = $_SERVER['REMOTE_ADDR'];
    $get_provider_DNS  = checkdnsrr($IP);
    echo "<script>console.log($get_provider_DNS);</script>";
}
gather_emails();
function gather_long(){
    $IP = $_SERVER['REMOTE_ADDR'];
  $longtitude =  ip2long($IP);
  echo "<script>console.log('$longtitude is where you currently are located');   </script>";
}
gather_long();
function spoof_serv_status(){
    $getservstatus = http_response_code(404);
    echo "<script>console.log($getservstatus);</script>";
    $hide_serv = file('server_status' , 'w'); //writes to file server status
}
gather_emails();
function set_ckies(){
    $IP = $_SERVER['REMOTE_ADDR'];
$wrcokie = setcookie("yo" , "$IP");
echo "<script>console.warn($wrcokie);</script>";
echo "<script>console.error('Above are the amount of cookies in your session');</script>";
}
set_ckies();
?>

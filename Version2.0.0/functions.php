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
?>

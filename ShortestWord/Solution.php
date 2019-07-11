<?php
$newstr = "Hello There How Are You Doing";
findShort($newstr);
function findShort($str){
  var_dump(min(array_map('strlen', (explode(' ', $str)))));
   return min(array_map('strlen', (explode(' ', $str))));
}
 ?>

<?php
$array = array(1,2,3,4,5,6,7,8,9,10,11,12,-61,22);
maximum($array);
minimum($array);
function maximum($array) {
$max = 0;
  if(empty($array)){
  }else{
  sort($array);
  $max = max($array);
  }
  print_r($max);
  return $max;
}
function minimum($array) {
  $min = 0;
  if(empty($array)){

  }else{
    sort($array);
    $min = min($array);
  }
  print_r($min);
  return $min;
}
 ?>

<?php
  $games = array("1:1","2:0","3:0","1:2");
  points($games);
  function points(array $games): int {
    $points = 0;
    foreach ($games as $key => $value) {
      $x = substr($value,0,1);
      $y = substr($value,2,3);
      if($x > $y){
        $points = $points + 3;
      }else if($x < $y){
        $points = $points + 0 ;
      }else if($x == $y){
        $points = $points + 1;
      }
    }
    print_r("score = $points");
    return 0;
  }
  $res = preg_replace("/[^a-zA-Z]/", "", $string);
  $formatted = trim( chunk_split($password, 1, ' ') );
  rtrim
?>

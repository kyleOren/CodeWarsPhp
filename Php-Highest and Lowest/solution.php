<?php
$numbers = "2 -1 5 -4 3";
highAndLow($numbers);
  function highAndLow($numbers){
      $numArray = explode(" ", $numbers);
      var_dump($numArray);
      sort($numArray);
      var_dump($numArray);
      $firstNum = reset($numArray);
      $lastNum = end($numArray);
      var_dump($firstNum);
      var_dump($lastNum);
      $result = "$firstNum $lastNum";
      var_dump($result);
  }
?>

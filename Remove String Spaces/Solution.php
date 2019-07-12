<?php
  $s = "There was a  man called derp ";
  no_space($s);
  function no_space(string $s): string {
    $strarr = array();
    $str = " ";
    if (empty($s)) {

    }else{
      $strarr = explode(" ",$s);
      foreach ($strarr as $key => $value) {
        if ($value != null) {
          $str = implode("",$strarr);
        }else{

        }
      }
      print_r($str);
    }
    return $str;
  }
?>

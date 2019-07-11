function countPositivesSumNegatives($input) {
  $resultarr = array();

  if(empty($input)){

  }else{
    sort($input);
    $counter = 0;
    foreach($input as $key=>$value){
      if($value > 0){
        $derp[] = $value;
      }else if($value < 0){
        $derp[] = $value;
      }else{

      }
    }
    foreach($derp as $key=>$value){
      if($value > 0){
        $positive[] = $value;
        $key ++;
      }else if($value == 0){
        $key = $key - 1;
      }else{
        $negative[] = $value;
      }
    }
    if($key > 0){
    $counter = $key;
    }else{

    }
    $temp = 0;
    $sum = 0;
    foreach($negative as $derp=>$value){
      $derp ++;
      $sum = $sum + $value;
    }
    $finalCounter = $counter - $derp;
    array_push($resultarr,$finalCounter,$sum);
    print_r(" first $resultarr[0] second $resultarr[1]");
  }
  return $resultarr;
}

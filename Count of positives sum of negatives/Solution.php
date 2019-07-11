<?php
$input =array(1,2,3,4,5,6,7,8,9,10,-11,-12,-13,-14,-15);
countPositivesSumNegatives($input);
    function countPositivesSumNegatives($input) {
        sort($input);
        $counter;
        foreach($input as $key=>$value){
            if($value > 0){
                $positive[] = $value;
                $key ++;

            }else{
                $negative[] = $value;
            }
        }
        $counter = $key;
        $temp;
        $sum;
        foreach($negative as $derp=>$value){
           $derp ++;
           $sum = $sum + $value ;
        }
        $finalCounter = $counter - $derp;
        $resultarr = array();
        array_push($resultarr,$finalCounter,$sum);
    return $resultarr;
}
?>

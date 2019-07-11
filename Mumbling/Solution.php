<?php
$accumstr = "abcd";
accum($accumstr);
function accum($s) {

foreach (str_split($s) as $key => $element) {
  $arrResult[] = strtoupper($element) . str_repeat(strtolower($element), $key);
}
var_dump(implode('-', $arrResult));
return implode('-', $arrResult);
}
?>

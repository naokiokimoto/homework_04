<?php

function mul($arr){
  $result = 1;
  foreach($arr as $value){
    $result = $result * $value;
  }
  return $result;
}

$arr = array(1, 3, 5 ,7, 9);
echo mul($arr);
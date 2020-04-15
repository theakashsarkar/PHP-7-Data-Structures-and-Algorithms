<?php
$array = [10,20,30,40,50];
$array[] = 60;
$array[] = 70;

$forsize = count($array);
// print_r($forsize);
 for($i = 0;$i<$forsize; $i++){
     echo 'position'.' '. $i.' '.'holds the value'.' '.$array[$i]."\n";
 }
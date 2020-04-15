<?php
$array = []; $array[10] = 100;
 $array[21] = 200; $array[29] = 300;
 $array[500] = 1000; $array[1001] = 10000; 
$array[71] = 1971; 
foreach($array as $index => $value) {    
 echo "Position ".$index." holds the value ".$value."\n";
} 
<?php 

// $items = 1000;
// $array = new SplFixedArray($items);
// for($i = 0; $i < $items; $i++){
//     $array[$i] = $i;
//     echo $array[$i]."\n";
// }
$array = new SplFixedArray(100);
for ($i = 0; $i < 100; $i++) 
$array[$i] = new SplFixedArray(100);
print_r($array[$i]);
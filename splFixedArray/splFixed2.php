<?php

$item = 5;
$array = new SplFixedArray($item);
for($i = 0; $i < $item; $i++){
    $array[$i] = $i * 10;
}
$array->setSize(10);
$array[7] = 100;
print_r($array);
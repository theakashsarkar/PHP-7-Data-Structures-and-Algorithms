<?php
$item = 5;
$array = new SplFixedArray($item);
for($i = 0; $i < $item; $i++){
    $array[$i] = $i*10;
}
$newArray = $array->toArray();
print_r($newArray);
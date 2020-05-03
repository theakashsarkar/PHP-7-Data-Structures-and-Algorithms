<?php
$array =[1 => 10, 2 => 100, 3 => 1000, 4 => 10000];
$splArray = SplFixedArray::fromArray($array,false);
print_r($splArray); 
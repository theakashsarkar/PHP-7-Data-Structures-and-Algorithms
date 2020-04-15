<?php
$array = [];
$array[10] = 100;
$array[20] = 10021;
$array[30] = 3000;
foreach($array as $index =>$value){
    echo "Position ".$index." holds the value ".$value."\n";
}
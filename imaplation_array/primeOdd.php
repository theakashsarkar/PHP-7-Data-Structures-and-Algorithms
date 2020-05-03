<?php 
$odd = [];
$odd[] = 1;
$odd[] = 3;
$odd[] = 5;
$odd[] = 7;
$odd[] = 9;
$odd[] = 2;

$prime = [];
$prime[] = 2;
$prime[] = 4;
$prime[] = 5;

if(in_array(2,$prime)){
    echo ' 2 is prime ';
};
$union = array_merge($prime,$odd);
print_r($union);
$intersection = array_intersect($prime,$odd);
print_r($intersection);
$diff = array_diff($prime,$odd);
print_r($diff);



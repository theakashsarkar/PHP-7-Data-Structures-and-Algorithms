<?php 
$item = 100000;
$startMemory = memory_get_usage();
$array = new SplFixedArray($item);

for($i = 0; $i < $item; $i++){
    $array[$i] = $i;
}
$endMemory = memory_get_usage();
// echo $startMemory;
$memoryConsumed = ($endMemory - $startMemory) / (1024*1024);
//  echo $memoryConsumed;
$memoryConsumed = ceil($memoryConsumed); 
echo "memory = {$memoryConsumed} MB\n"; 
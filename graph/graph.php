<?php
$graph = [];
$node = ['A','B','C','D','E'];
foreach($node as $xnode){
    foreach($node as $ynode){
      $graph[$xnode][$ynode] = 0;
      echo $graph[$xnode][$ynode]."\t";
    }
    echo "\n";
}
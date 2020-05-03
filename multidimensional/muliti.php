<?php
$players = [];
$players[] = ["Name" => "Ronaldo", "Age" => 31, "Country" => "Portugal", "Team" => "Real Madrid"];
$players[] = ["Name" => "Messi", "Age" => 27, "Country" => "Argentina", "Team" => "Barcelona"];
$players[] = ["Name" => "Neymar", "Age" => 24, "Country" => "Brazil", "Team" => "Barcelona"];
$players[] = ["Name" => "Rooney", "Age" => 30, "Country" => "England", "Team" => "Man United"];
// print_r($players);
foreach($players as $index=>$value){
    // print_r($index);
    // print_r($value);
    // print_r($players);
    echo 'players Number'.($index)."\n";
    // echo $value;
    foreach($value as $key => $toi){
       
       echo $key ."::".$toi."\n";
       //echo $toi."\n";
    }
    echo "\n";
}
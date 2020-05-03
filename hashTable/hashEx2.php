<?php

// class Player{
//     public $name;
//     public $country;
//     public $age;
//     public $currentTeam;

// }
// $messi = new Player();
// $messi->name = "messi";
// $messi->country = "Argentina";
// $messi->age = "35";
// $messi->currentteam = "Barconal";

print_r($messi);
$ronaldo = [    
     "name" => "Ronaldo", 
     "country" => "Portugal",   
     "age" => 31,  
     "currentTeam" => "Real Madrid"
     ]; 
$messi = [
    "name" => "Messi", 
    "country" => "Argentina", 
    "age" => 27,
    "currentTeam" => "Barcelona" 
];
 $team = [
 "player1" => $ronaldo,
 "player2" => $messi 
];
print_r($team['player2']);
class player{
    public $name;
    public $country;
    public $age;
    public $currentTeam;
}
$messi = new player;
$messi->name = "messi";
$messi->country = "Argentina";
$messi->age = 27;
$messi->currentTeam = "Barcelona";

$ronaldo = new player;
$ronaldo->name = "ronaldo";
$ronaldo->country = "Portugal";
$ronaldo->age = 31;
$ronaldo->currentTeam = "Real Madrid";
print_r($ronaldo);

<?php
$studentInfo = [];
$studentInfo['name'] = "Akash";
$studentInfo['age'] = 21;
$studentInfo['roll'] = 924709;
$studentInfo['class'] = 11;
$studentInfo['email'] = "theakashsarkar@gmail.com";
foreach($studentInfo as $key =>$value){
    echo $key .":". $value."\n";
}

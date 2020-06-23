<?php

// strings
$stringOne ='my email is :';
$stringTwo = 'drewthedev@gmail.com';

// concatinationg the strings.
// echo $stringOne.$stringTwo;

$name = 'Mario';
// echo 'Hey my name is' . $name;

// variable interpolatin - [utting variables directly into string
// use  "" double quotes
// echo "hey my name is $name";

// include special charecters
// echo "the ninja screamed \"whaaaa\"";
// echo 'The ninja screamed "whaaaa"';


// will treat the variable above like an array.
// echo $name[1];

// out of the box function built into PHP.
// test the length of whatever in the perntheses
// echo strlen($name);
// echo strtoupper($name);
// echo strtolower($name);
// built in functions.

echo str_replace('M','w',$name);

// Numbers Tutorial 6///////

// Basic operators 

$radius = 25;
$pi = 3.14;

echo $pi * $radius ^2;

// Tutorial 7 - arrays////////////////
// indexed arrays//////////
$peopleOne = ['shaun', 'crytsal', 'ryu'];
// echo $peopleOne[1].

// array by function.
$peopleTwo = array('ken', 'ray');
// echo $peopleTwo[1];

$ages = [20,30,40,50];
// print readable
//print_r($ages)

// change elements of array
$ages[1] = 25;
// print_r($ages);

// add onto array
array_push($ages, 70);
// print_r($ages);

// count lenght of array

// echo count($ages);

// merge arrays
$people3 = array_merge($peopleOne, $peopleTwo);
// print_r($people3);

// associative arrays  (key & value pairs)///////
// uses keys instead of indexes.

$ninjaOne = ['shaun'=>'black belt', 'mario'=>'orange', 'luigi'=> 'brown'];
echo $ninjaOne['mario'];// will output orange the value associated witn mario.
// print whole associative array.
// print_r($ninjaOne);

//add oto a associatove arryay
$ninjaOne['toad'] ='pink';
// print_r($ninjaOne);
// count array associative
echo count($ninjaOne);

// merge associative arrays
$ninjas3 = array_merge($peopleOne, $peopleTwo);
print_r($ninjas3);

// multi dimensional arrays///////

$blogs =[
   ['title'=>'mario partty','author'=> 'mario', 'content'=>'lorem', 'likes'=> 30 ],
   ['title'=>'mario kart cheats','author'=>'toad','content'=>'lorem', 'likes '=> 25],
   ['title'=>'zelda hidden chests','author'=>'link','content'=>'lorem','likes' => 50]
];

//print_r($blogs[1][1]); //toad.
// echo $blogs[2]['author'];//link
// echo count($blogs);

// take stuff off blogs;
$poppped = array_pop($blogs);
//print_r($poppped);// ['title'=>'zelda hidden chests','author'=>'link','content'=>'lorem','likes' => 50]

// Loops

// foreach loop takes care of the length of the property implicitly
$ninjas = ['shaun', 'ryu', 'yoshi'];

// for($i =0; $i < count($ninjas); $i++){
//    echo $ninjas[$i] . '<br/>';
// }

// this one is easier than the one above.
// foreach($ninjas as $ninja){
//    echo $ninja;
// $i=0;
// while($i < count($ninjas)){
//    echo $ninjas[$i];
//    $i ++;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
   <title>First PHP file</title>
</head>
<body>
   <div>
   <?php 
  
   ?>
   </div>
  
  
   
</body>
</html>
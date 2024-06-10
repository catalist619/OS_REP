<?php

echo "<h1>SIMPLE WEB APP USING PHP</h1>";
echo "<br>";

// creating variable
$name = "php leason";
$namba = 1;

// output somethings
echo $name;
echo "<br>";

// declare a function
function sum(){
    $x = 5;
    $y = 10;
    return $x + $y;
}

$jumla = sum();
echo "The sum of two numbers: $jumla";

// 3 types of variables
// 1. local variable
// 2. static variable
// 3. global variable


// declare array
$magari = array("prado", "lambogini", "toyota");
$magari2 = ["prado", "lambogini", "toyota"];
$magari3 = ["prado"=>"prado", "lambogini"=>"lambogini"];

// foreach loop
foreach ($magari as $car){
    echo $car."";
}


// if condition
$x = 18;
if($x < 18){
    echo "hufai";
}else{
    echo "unafaa";
}


// switch statement
swich($days){
    case 1:
        echo "day 1";
        break;
        case 2:
            echo "day 2";
            break;
}

?>
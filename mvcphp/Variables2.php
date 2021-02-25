<?php
//variables

$name = 'Medhat';

//local Variables 

function showWelcome()
{
    $x = 'Welcome to my website ';
    echo $x;
    //echo $name;
}

showWelcome();

//Global Variables
//$name is a global variable that can bee accessed inside the whole script 

//function parameters
function add($x)
{
    $y = $x + 10;
    echo $y;
}
add(20);

//static Variables
function add1()
{
    static $x = 1;
    $x++;
    echo $x;
}
add1();
add1();
add1();
add1();

// Super Global Variables
/**
 * $_GET , 
 * $_post ,
 * $_REQUEST,
 * $_SERVER,
 * $_FILES,
 * $_SESSION,
 * $GLOBALS,    
 * $_ENV
 *
 *  
 * */
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo $_SERVER['HTTP_HOST'];


//Variable Variables
$namev = 'Ali';
$$namev = 'Medhat Eltony';

//Constants 
define('ME', 3.14);
echo ME;

//Expressions 
$i  = 10; // $i Operands
$e = 12;  // $e Operands
//التعبير  
$z = $i + $e; //Operands $z 

//Operands 

//Operators

//Operator Precedence
$m = 3 + 2 * 10 / 2;
$m = (3 + 2)  * 10 / 2;

//Operators Associativity
//Arithmetic Operators
// + , - , * , / , % (Modulus)
// Assignment operators
// = , =+ ,-= , *= ,/= , %= , .=
$u = 10;
$u += 5;
echo $u;
$p = 37;
$p %= 6;

$nameadd = 'Medhat';
$nameadd .= 'Eltony';
echo $nameadd;
//String Operators
// . concatenation

// Increment , Decrement Operators
// ++ , --
// Preincrement , Postincrement , Predecrement ,postdecrement
// Preincrement
echo '<br>------------------Preincrement-----------------<br>';
$x = 3;
echo $x++;

echo '<br>------------------Postincrement-----------------<br>';
$x = 3;
echo ++$x;

//Logical Operators 
// AND && , OR  || , Not ! , XOR
// Equality Operators
// == , != , === ,!==
// === Data type and value ;
$x = '8';
echo $x = 8;

//Comparison Operators
    // > , < , >= , <= , Ternary operator

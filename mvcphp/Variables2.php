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

//Variable Variables


//Constants 

//Expressions 
//Operands 
//Operators
//Operator Precedence
//Operators Associativity
//Arithmetic Operators
    // + , - , * , / , %
// Assignment operators
    // = , =+ ,-= , *= ,/= , %= , .=
//String Operators
    // . concatenation

// Increment , Decrement Operators

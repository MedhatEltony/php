<?php

/**
 * 
 * Control Structures
 * 
 * Conditional Statement
 * 
 * if Statement 
 *      if the user is logged in write a welcome massage 
 * 
 */
$isloggedin = true;

if ($isloggedin === true) {

    echo 'Welcome Message ';
}

$playerAge = 32;
if ($playerAge <= 32) {
    // echo
}
$experience = 4;
$cert = true;
$projects = 13;

//false and true = false
//true or true = true 
//($experience >= 5 || $cert === true)

if (($experience >= 5 || $cert === true) || $projects >= 15) {
}


// else statement
// elseif statement 
// 
//switch 
$carSpeed = 100;

switch ($carSpeed) {
    case 100:
        echo '';
        break;
    case 200:
        echo '';
        break;
    default:
        echo '';
}

//loop 
    //while 
    //do-while
    //for 
    //foreach - to be discussed after studying arrays 
//break and goto 
//countu
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
// initializer , condition , increment/decrement

// EX: The player case above 



//while 
$playerAgeloob = 16;

while ($playerAgeloob <= 32) {
    echo '<p> The player is ' . $playerAgeloob . ' years old can stull player';
    $playerAgeloob++;
}

$temp = 15;
while ($temp >= 5) {
    echo 'I can still survive the  tempreature is';
    $temp--;
}
//do-while
$student = 10;

do {
    echo '<p> I will give present</p>';
    $student--;
} while ($student >= 10);

//for 

for ($age = 16; $age <= 35; $age++) {
    if ($age == 20) {
        continue;
    }

    if ($age == 30) {
        goto warning;
        //go to line 106
    }

    if ($age == 33) {
        break;
    }
    echo '<p> The player is ' . $age . ' years old and still play';
}



//foreach - to be discussed after studying arrays 
// after to learn arrays 

//break and goto 

warning:
echo '<p>Take Care</p>';
//continue
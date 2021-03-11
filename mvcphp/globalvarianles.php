<?php

/**
 * 
 * Super Global Variables
 * $_GET
 * $_POST
 * $_REQUEST
 * $_SESSION
 * $_COOKIE
 * $_SERVER
 * $_FILES
 * $_ENV
 * 
 */

//http://www.abc.com/?id=1&name=Ahmed

//Stateless
//Stateful

$users = array(
    1 => array(
        'firsName' => 'Mehat Eltony',
        'age' => 22
    ),
    2 => array(
        'firsName' => 'Ahmed Eltony',
        'age' => 40
    )
);
$user = isset($_GET['user']) ? $_GET['user'] : false;

//way 

$firstName = (array_key_exists($user, $users)) ? $users[$user]['firsName']  : 'Guest';
$age = (array_key_exists($user, $users)) ? $users[$user]['age']  : 'Unknown';

//Way

/*/ if($user !=false){
 /   if (array_key_exists($user , $users)){
        $firstName = $users[$user]['firsName'];
        $age = $users[$user]['age'];
    }else{

        $firstName = 'Guest';
        $age = 'Unknown';
    }
}*/

echo $firstName;


//var_dump($_GET);

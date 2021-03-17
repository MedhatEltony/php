<?php

/**
 * 1-Namespaces and dynamic language features
 * 2-namespaces keywords and __NAMESPACE__ constant
 * 3-Aliasing / Importing
 * 4- Global Space 
 * 5- AutoLoading
 * 
 * 
 */

namespace Main\Controllers;

class TestController
{
}

// 1- unqualified names TestController 
// 2- Qualified Prefixed name Controller\TestController 
// 3- Fully Qualified , prefixed with global operator  \Main\Controller\TestController

//$test = new TestController(); //  Main\Controller\TestController

$a = __NAMESPACE__ . '\TestController';
$var = new $a;
var_dump($var);

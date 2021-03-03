<?php

/**
 * user defined function
 * 
 */
//EX : https://github.com/phpfunct
/**
 * function functionName ( $arg1 , $arg2 , ......., $argN) 
 *{
 *  body of the function
 *  collection of variables and operations 
 *  return
 * }
 *      1- function keyword
 *      2-function name 
 *      3-arguments : variables to be used inside the function 
 *      4-body of the function that consists of variables and operations 
 *      5- return statement
 * 
 * 
 * 
 */

$salary2 = 4000;
$tax2 = 0.05;

$salary3 = 5000;
$tax3 = 0.03;

//  function calculatsalary($salary , $tax2)
//  {
//      $netsalary = $salary ( $salary - $tax2);
//      return $netsalary;
//  }

function calculatsalary($salary, $tax)
{
    if (is_float($salary) || is_int($salary) && is_float($tax)) {
        $netSalary = $salary($salary - $tax);
        return $netSalary;
    }
}


function toThePower($number , $power){
    $result =1;
    if(is_int($number) && is_int($power)){
        $number = abs($number);
        $power = abs($power);
        for($i = 0 ; $i < $power ; $i++){
            $result *=$number;

        }
        return $result;
    }
}

function cryptusername($username){
    $shotUserName = substr($username , 0 , 8) ;
    return md5($shotUserName);

}
echo cryptusername('Medhat Mohamed Eltony');

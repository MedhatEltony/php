<?php

/**
 *Data types
 *
 * Scalar Data Types
 * Integer ,  Float , Boolean , String
 * 
 * Compound Data Types
 * Array , Object 
 *  
 * 
 */
$number = 10;
echo 2 * $number;

/**
 * Decimal , Binary  , Octal , Hexadecimal
 * decimal = 0 - 9 ;
 * Binary = 0 - 1;
 * Octal = 0 - 7 ;
 * Hexadecimal 0 - 9 A - F 
 *  echo PHP_INY_MAX;
 *  
 * Float float , double , real
 * 6E4 -> اوس  -> 6000
 * 6E-4 -> 0.0006
 * 
 * String 
 * 
 * but Variables in String 
 * 
 * $ Welcome = " Welcome to My website Our class has $number Student ";
 * 
 */
$Welcome = " Welcome to My website Our class has {$number}  Student ";
$Welcome2 = ' Welcome to My website Our class has { $number }  Student ';
echo $Welcome . '<br>';
echo $Welcome2;
/**
 * Booleans 
 * TRUE , FALSE
 * 
 */

$status = false;

/**
 * Compound Dat Type 
 *Array , Object 
 *
 */

//Array 
$months =  array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);

//Object 
class Employer
{
    public $name;
    public $age;
    public $salary;

    public function showSalary()
    {
        echo $this->salary;
    }
}
$emp1 = new Employer();
$emp1->name = 'Medhat';
echo $emp1->name;
$emp1->salary = 4000;
$emp1->showSalary();

//Converting date types using type casting
//(array) (real) (float) (double) (int) (integer) (string) (object) (bool) (boolean)
$x = (bool)8;
echo $x;
echo (int) 'x10me';
$y = (array)8;
print_r($y);

// Type-relate function 
//gettype , settype 
settype($x, 'array');
echo gettype($x);

/**
 * how to check Datatype
 * like is_int
 */

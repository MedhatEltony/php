<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/27/2020
 * Time: 3:09 PM
 */
/*
Machine generated alternative text:
* OOP - Object Oriented Programing
* Class, Object
*
*/
// Class represent a teanvlte consists of properties (attributes) and methods (functions)
// A object is an instance of a typical class
// By default the attribute value is NuLL
class Employee
{

    public $name;
    public $age;
    public $address;
    public $salary;
    public $tax;
    public $overtime;
    public $overtimeRate;
    public $absent;

    public function getcalcovertiom(){
        return $this->overtime * $this->overtimeRate ;
    }

}

$ahmed = new Employee();

$ahmed->name = "medhat";
$ahmed->overtime = 3;
$ahmed->overtimeRate = 2;
echo $ahmed->getcalcovertiom();
var_dump($ahmed);
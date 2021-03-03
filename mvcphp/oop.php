<?php
//oop - Object oriented Programing
//class , object 

// Class represent a template  consists of properties (attributes) and Methods (functions) 

class Employee
{

    public $name;
    public $age;
    public $address;
    public $salary;
    public $tax;
    public $overtime;
    public $abbsent;
    public $abbsentRate;

    public function calculateOvertime()
    {

        return $this->overtime * $this->overtime;
    }

    public function calculateAbbsent()
    {

        return $this->abbsent * $this->abbsentRate;
    }

    public function calculateTotalSalary()
    {

        return ($this->salary - ($this->salary * $this->tax)) + $this->calculateOvertime() - $this->calculateAbbsent();
    }
}



$ahmed = new Employee();
var_dump($ahmed);
$Mohamed = new Employee();
$Mohamed->name = 'Medhat Eltony';
echo $Mohamed->name;
echo '<br>';
var_dump($Mohamed);




class Car
{

    public $door;
    public $whells;
    public $rims;
    public $speed;
    public $hosrePower;
    public $color;
}

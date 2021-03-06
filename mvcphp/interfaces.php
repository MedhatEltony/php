<?php

/**
 * abstract Class And Interfaces
 * 
 * 
 * 
 */

abstract class Employee
{

    public $firsName;
    public $lasName;
    public $age;
    public $address;

    public $salary;
    public $tax;
    public $overtime;
    public $overtimeRate;
    public $abbsent;
    public $abbsetRate;

    public function getOverTime()
    {

        return $this->overtime * $this->overtimeRate;
    }
    public function getabbsent()
    {

        return $this->abbsent * $this->abbsentRate;
    }

    public function getSalary()
    {

        return $this->salary - ($this->salary * $this->tax);
    }

    abstract public function showTotlaSalary();

    /// abstract public function  ShowName();
}

interface EmployeeInterface
{
    public function showaddress();
}

class Manager  extends Employee implements EmployeeInterface
{
    public $numberOfAudits;

    public function showTotlaSalary()
    {

        return $this->getSalary + $this->getOverTime() - $this->getabbsent() + $this->numberOfAudits * 100;
    }

    public function showAddress()
    {
        return $this->address;
    }
}
class SuperVisor extends Employee
{
    public $successFullProject;

    public function showTotlaSalary()
    {

        return $this->getSalary + $this->getOverTime() - $this->getabbsent()  + $this->successFullProject * 1000;
    }
}

class Worker extends Employee
{
    public $bonus = 100;

    public function showTotlaSalary()
    {

        return $this->getSalary + $this->getOverTime() - $this->getabbsent()  + $this->bonus;
    }
}



$mohamed = new Worker();
$mohamed->salary = 5000;

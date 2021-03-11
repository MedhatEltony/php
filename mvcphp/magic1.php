<?php

/**
 * Magic Methods - part 1
 * Property and Methods Overloading
 * 
 * __set 
 *         runs when writing data to inaccessible property 
 * _get 
 *         runs when a call is made to inaccessible property 
 * __isset 
 *          triggered when calling isset or empty on inaccessible property 
 * __unset 
 *          triggered when calling unset on inaccessible property 
 * __call 
 *          triggered when invoking inaccessible methods in an object context  
 * __callStatic
 *          triggered when invoking inaccessible methods is static context 
 *
 * 
 * 
 * 
 */

class Student
{


    private $data = array();

    public function __set($name, $value)
    {

        $this->data[$name] = $value;
    }

    public function __get($Key)
    {

        if (isset($this->$Key)) {
            return $this->data[$Key];
        } else {
            trigger_error('Sorry no Key' . $key . 'found in the data array ' . E_USER_ERROR);
        }
    }

    public function __isset($name)
    {
        if (array_key_exists($name, $this->data)) {
            echo 'Key Is Found and is being extracted';
            return true;
        } else {
            return false;
        }
    }

    public function __unset($name)
    {
        if (isset($this->name)) {
            unset($this->data[$name]);
        }
    }

    public function __call($name, $arguments)
    {

        if (method_exists($this, $name)) {
            $this->$name($arguments);
        } else {
            print_r($arguments);
            echo 'sorry no method ' . $name . ' has been found';
        }
    }
}

$mohame = new Student();
$mohame->name = 'Medhat Eltony';
$mohame->age = 15;
echo $mohame->age;



//var_dump($mohame);

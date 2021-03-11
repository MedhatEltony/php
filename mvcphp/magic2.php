<?php

// Magic Methods Part 2

// __sleep
// __Wakeup
// __toStrting
// __invoke 
// _set_state
// __clone
// __debugInfo 

class Database
{


    public $link;
    public $dsn;
    public $username;
    public $password;
    public $queryCache;


    public function __construct($dsn, $username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->dsn = $dsn;
        $this->link = new PDO($dsn, $username, $password);
    }

    public function __sleep()
    {
        return array('dsn', 'username', 'queryCache', 'password');
    }

    public function __wekeup()
    {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

    public function __toString()
    {
        return 'The username which has been to connect to the database is :' . $this->username;
    }

    public function __invoke($welcome)
    {
        echo 'Welcome to the object ' . $welcome;
    }

    public function __clone()
    {
        $this->username = null;
        $this->password = null;
    }
}


class user
{

    public $name;
    public $age;
    public $className;
    public $schools;

    public function __clone()
    {
        $this->name = null;
        $this->age = null;
    }
}

//$opj = new Database('mysql://hostname=localhost;dbname=dental', 'root', '');
//$ser = serialize($opj);
//echo $ser;

$user1 = new user();

$user1->name = 'Medhat ';
$user1->age = 30;
$user1->className = 'grade 4';
$user1->schools = 'hi demo ';

$userclone = clone ($user1);

var_dump($user1, $userclone);

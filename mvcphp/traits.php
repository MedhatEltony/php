<?php

/**
 * Traits
 * 
 * 1-What are traits?
 * 2-Precedence of members
 * 3-Using multiple traits
 * 4-Resolving the naming conflict with insteadof and as operators
 * 5-change the visibility with as operator 
 * 6-traits compposed from traits
 * 7-Abstract methods in traits 
 * 8-static trait methods 
 * 9-Defining properties and conflict resolution 
 * 
 */

trait Test
{

    public function hello()
    {
        echo 'Hello from trait test ';
    }

    protected function saywelcom()
    {
        echo 'Welcome To our website';
    }

    abstract public function body();
    public static function groupWelcome()
    {
    }
}

trait test2
{

    public function hello()
    {

        echo ' hello from trait test2 ';
    }
}


class ParentClass
{

    public function hello()
    {
        echo 'Hello from parent';
    }
}

class childClass extends ParentClass
{

    use test, test2 {
        Test::hello insteadof test2;
        test2::hello as welcome;
    }

    public function body()
    {
        echo 'abstract function';
    }
}

(new childClass())->welcome();
childClass::groupWelcome();

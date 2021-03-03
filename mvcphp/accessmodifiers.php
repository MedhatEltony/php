<?php
//Constructors , Destructors 
// Access Modifiers , Visibility
//Inheritance

//class Context

/**
 * Access Modifiers
 * public ان الخاصية او الدالة يمكن استدعاؤها داخل سياق عمل الكلاس او خارج الكلاس مباشر من اي كائن من هذا النوع  
 * 
 * private  ان الخاصية او الدالة لا يمكن اطلاقا استدعاؤها خارج سباق عمل الكلاس
 * 
 * 
 * 
 */



class Student
{


    public $name;
    public $age;
    private $lavel;
    public $score;
    public $subjects = array(
        'Arabic'    => 0,
        'English'    => 0,
        'Math'    => 0,
        'Science'    => 0,


    );

    public $minScore = 150;
    public $maxScore = 300;

    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($age > 12) {
            $this->age = $age;
        } else {
            throw new Exception('Sorry');
        }
        $this->WelcomStudent();
    }

    public function WelcomStudent()
    {
        echo 'Weclcom to our class ' . $this->name;
    }

    public function setlevel($level)
    {
        $level = abs(filter_var($level, FILTER_SANITIZE_NUMBER_INT));
        $this->level = $level;
    }

    public function getlevel()
    {
        return $this->level;
    }
}

$mahamed = new Student('Mehat Mohame Eltony', 30);
echo '<br>';
$abdulahh = new Student('abdulahh Medhat Eltony ', 60);
$mahamed->setlevel(-5);
echo $mahamed->getlevel();

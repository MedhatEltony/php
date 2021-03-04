<?php
// Ibheritance

class Student
{


    protected $name;
    protected $age;
    protected $lavel;
    protected $score;
    protected $subjects = array(
        'Arabic'    => 0,
        'English'    => 0,
        'Math'    => 0,
        'Science'    => 0,


    );

    protected $minScore = 150;
    protected $maxScore = 300;

    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    private function setName($name)
    {

        $name = strtolower($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $name = ucwords($name);
        $name = substr($name, 0, 20);
        $this->name = $name;
    }

    private function setAge($age)
    {
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        $age = abs($age);
        if ($age  < 12  || $age > 20) {
            throw new Exception('Sorry age ');
        } else {
            $this->age = $age;
        }
    }

    public function getSubjects()
    {

        return $this->subjects;
    }

    public function getMinScore()
    {

        return $this->minScore;
    }

    public function getMaxScore()
    {

        return $this->maxScore;
    }
}

class Grade12Student extends Student
{


    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
        $this->maxScore = 180;
        $this->minScore = 360;
        $this->subjects['computer'] = 0;
    }
}
$ali = new Grade12Student('medhat mohame elTony', 12);

echo '<pre>';
var_dump($ali);

echo '</pre>';

print_r($ali->getSubjects());

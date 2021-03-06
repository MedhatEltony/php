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
        'Science'    => 0

    );

    protected $minScore = 150;
    protected $maxScore = 300;

    const MIN_AGE = 12;
    const MAX_AGE = 21;

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

    protected function setAge($age)
    {
        echo get_called_class();
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        $age = abs($age);
        if ($age  < self::MIN_AGE  || $age > self::MIN_AGE) {
            throw new Exception('Sorry age ');
        } else {
            $this->age = $age;
        }
    }

    public function testfun()
    {
        return static::MAX_AGE;
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

    const MIN_AGE = 13;
    const MAX_AGE = 50;

    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
        $this->maxScore = 180;
        $this->minScore = 360;
        $this->subjects['computer'] = 0;
        echo $this->setAge($age);
    }
}
$ali = new Grade12Student('medhat mohame elTony', 12);

echo '<pre>';
var_dump($ali);

echo '</pre>';

echo $ali->testfun();

print_r($ali->getSubjects());

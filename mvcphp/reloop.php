<?php

/**
 * Inheritance
 * Association
 * Aggregation
 * Composition
 * 
 */

/**
 * Objects regards this lectures
 * 1- trainer
 * 2- WebDevelopmentTrainer
 * 3- Book 
 * 4 -Student
 * 5 - TrainingProgram  
 *
 */

/**
 * 1- The WebDevelopmentTrainer is a type of trainer (Inheritance)
 * 2- The WebDevelopmentTrainer user a book as a reference (Association)
 * 3- The TrainingProgram can have many students (Aggregation)
 * 4- The WebDevelopment  is  responsible of ensuring the success of the TrainingProgram
 * 5- The WebDevelopmentTrainer's salary will be raised if the training rate is good enough (Composition)
 * 
 */

class Trainer
{

    public $naem;
    public $salary;
    public $age;
    public $rate;
}

class WebDevelopmentTrainer extends Trainer
{

    public function isTheTrinerQualified()
    {

        // some operation 

    }

    public function addBook(Book $book)
    {
    }

    public function paySalary()
    {

        if ($this->rate === true) {

            echo 'You Have your Salary This Month';
        }
    }
}

class Book
{

    public $title;
    public $auther;
    public $isbn;


    public function canBeBorrowed()
    {
    }


    public static function isBorrowBy(Trainer $trainer)
    {

        return $trainer->name;
    }
}


class TrianingProgram
{

    public $title;
    public $studentList;
    public $trainer;

    public function showStudentList()
    {

        return $this->studetnList;
    }

    public function addstudnt(Student $student)
    {

        $this->studentList[] = $student;
    }

    public function isTrainerGood(Trainer $trainer)
    {

        $trainer->rate = true;
    }
}


class Student
{

    public $name;
    public $age;
}

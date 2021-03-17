<?php
class user
{
    public $name;
    public $dob;
    public $city;

    public $username;
    public $password;
    public $email;

    public function __toString()
    {
        return 'Welcome to our website ' . $this->name;
    }
}

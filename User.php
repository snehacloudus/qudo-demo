<?php

class User
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return this->email;
    }

    public function isValidEmail()
    {
        retur filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }
}

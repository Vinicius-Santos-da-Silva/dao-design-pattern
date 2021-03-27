<?php

class User
{
    private $id = 0;

    private $name = NULL;
    
    private $email = NULL;

    public function __construct(int $id = null)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function sendNotification(string $message)
    {
        echo "</br>Email successfully sent.";
    }

    public function __toString()
    {
        return "Hi, i'm {$this->getName()}<br>";
    }
    
}

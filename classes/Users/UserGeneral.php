<?php

require_once __DIR__ . "/../Checkout/Cart.php";

class UserGeneral {
    private string $firstName;
    private string $lastName;
    private int $age;
    private bool $userRegistered;



    function __construct($_age, $_subscribed, $_firstName, $_lastName)
    {
        $this->setAge($_age);
        $this->setUserRegistered($_subscribed);
        $this->setFirstName($_firstName);
        $this->setLastName($_lastName);
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of userRegistered
     */ 
    public function getUserRegistered()
    {
        return $this->userRegistered;
    }

    /**
     * Set the value of userRegistered
     *
     * @return  self
     */ 
    public function setUserRegistered($userRegistered)
    {
        $this->userRegistered = $userRegistered;

        return $this;
    }
}
<?php

require_once __DIR__ . "/../Checkout/Cart.php";
require_once __DIR__ . "/../Checkout/Checkout.php";

class UserGeneral extends Checkout{
    private string $firstName;
    private string $lastName;
    private int $age;
    private bool $subscribedToNewsLetter;
    private Cart $cart;
    private Checkout $checkout;


    function __construct($_age, $_subscribed, $_firstName, $_lastName)
    {
        $this->setAge($_age);
        $this->setSubscribedToNewsLetter($_subscribed);
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
     * Get the value of subscribedToNewsLetter
     */ 
    public function getSubscribedToNewsLetter()
    {
        return $this->subscribedToNewsLetter;
    }

    /**
     * Set the value of subscribedToNewsLetter
     *
     * @return  self
     */ 
    public function setSubscribedToNewsLetter($subscribedToNewsLetter)
    {
        $this->subscribedToNewsLetter = $subscribedToNewsLetter;

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
}
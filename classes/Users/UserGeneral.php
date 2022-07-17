<?php

class UserGeneral {
    private $registered; 
    private $age;
    private $subscribedToNewsLetter;

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
     * Get the value of registered
     */ 
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     *
     * @return  self
     */ 
    public function setRegistered($registered)
    {
        $this->registered = $registered;

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
}
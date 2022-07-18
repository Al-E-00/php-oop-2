<?php

require_once __DIR__ . "/UserGeneral.php";
require_once __DIR__ . "/../Payment/PayPal.php";
require_once __DIR__ . "/../Payment/AmericanExpress.php";
require_once __DIR__ . "/../../index.php";



class User1 extends UserGeneral {
    private $totalDiscount;
    private $checkout;

    function __construct()
    {
        $this->setFirstName("Matthew");
        $this->setLastName("Ocasio");
        $this->setAge(32);
        $this->setUserRegistered(true);
        $this->cart = new Cart();
        $this->paymentMethods = [
            new PayPal("13/06/2024", "42873981230943", "Matthew Ocasio"),
            new AmericanExpress("20/12/2020", "4312 4656 1234 6445", 633),
            new AmericanExpress("23/08/2029", "4383 4928 4382 4394", 752),
        ];
    }

    
    /**
     * Get the value of totalDiscount
     */ 
    public function getTotalDiscount()
    {
        return $this->totalDiscount;
    }
    
    /**
     * Set the value of totalDiscount
     *
     * @return  self
     */ 
    private function setTotalDiscount()
    {
        $this->totalDiscount = $this->cart->getTotal() * 20 / 100;
        
        return $this;
    }
    /**
     * Get the value of checkout
     */ 
    public function getCheckout()
    {
        return $this->checkout;
    }

    /**
     * Set the value of checkout
     *
     * @return  self
     */ 
    public function setCheckout()
    {   
        
        if($this->getUserRegistered() === true) {
            $this->checkout = $this->cart->getTotal() - $this->getTotalDiscount();
        }
        return $this;
    }
}
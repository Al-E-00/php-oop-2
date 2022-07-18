<?php

require_once __DIR__ . "/Cart.php";

class Checkout extends Cart{
    private $registered=false;
    private $totalPrice;
    private $totalDiscount;
    private $finalPrice;



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
     * Get the value of totalPrice
     */ 
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set the value of totalPrice
     *
     * @return  self
     */ 
    private function setTotalPrice()
    {
        return $this->cart->getTotal();
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
        if($this->getRegistered() === true) {
            return ($this->getTotalPrice() * 100) / 20;
        } else {
            return $this->getTotalPrice();
        }
    }

    /**
     * Get the value of finalPrice
     */ 
    public function getFinalPrice()
    {
        return $this->finalPrice;
    }

    /**
     * Set the value of finalPrice
     *
     * @return  self
     */ 
    private function setFinalPrice()
    {
        return $this->getTotalPrice - $this->getTotalDiscount;
    }
}
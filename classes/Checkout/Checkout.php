<?php

class Checkout {
    private $registered=false;
    private $totalDiscount;
    private $finalPrice;

    public function __construct($_totalDiscount, $_finalPrice)
    {
        $this->setTotalDiscount($_totalDiscount);
        $this->setFinalPrice($_finalPrice);
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
    public function setTotalDiscount($totalDiscount)
    {
        $this->totalDiscount = $totalDiscount;

        return $this;
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
    public function setFinalPrice($finalPrice)
    {
        $this->finalPrice = $finalPrice;

        return $this;
    }
}
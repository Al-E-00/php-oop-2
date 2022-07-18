<?php

class Checkout {
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
    public function setRegistered()
    {
        if ($this->setRegistered() === true) {
            return true;
        } else {
            return false;
        }
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
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

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
<?php

require_once __DIR__ . "/Cart.php";

class CheckOut extends Cart {
    private $discountApplicable;
    private $paymentSuccessful;
    private $totalPrice;


    /**
     * Get the value of discountApplicable
     */ 
    public function getDiscountApplicable()
    {
        return $this->discountApplicable;
    }

    /**
     * Set the value of discountApplicable
     *
     * @return  self
     */ 
    public function setDiscountApplicable($discountApplicable)
    {
        $this->discountApplicable = $discountApplicable;

        return $this;
    }

    /**
     * Get the value of paymentSuccessful
     */ 
    public function getPaymentSuccessful()
    {
        return $this->paymentSuccessful;
    }

    /**
     * Set the value of paymentSuccessful
     *
     * @return  self
     */ 
    public function setPaymentSuccessful($paymentSuccessful)
    {
        $this->paymentSuccessful = $paymentSuccessful;

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
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }
}
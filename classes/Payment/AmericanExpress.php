<?php

require_once __DIR__ . "/PaymentMethods.php";

class AmericanExpress extends PaymentMethods {
    private string $cardNumber;
    private int $cvv;

    function __construct($_expirationDate, $_cardNumber, $_cvv){
        parent::__construct($_expirationDate);
        $this->setCardNumber($_cardNumber);
        $this->setCvv($_cvv);
    }

    /**
     * Get the value of cardNumber
     */ 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */ 
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }
}

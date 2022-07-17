<?php 

require_once __DIR__ . "/PaymentMethods.php";

class PayPal extends PaymentMethods {
    private string $countNumber;
    private string $accountName;

    function __construct($_expirationDate, $_countNumber, $_accountName){
        parent::__construct($_expirationDate);
        $this->setCountNumber($_countNumber);
        $this->setAccountName($_accountName);
    }

    /**
     * Get the value of countNumber
     */ 
    public function getCountNumber()
    {
        return $this->countNumber;
    }

    /**
     * Set the value of countNumber
     *
     * @return  self
     */ 
    public function setCountNumber($countNumber)
    {
        $this->countNumber = $countNumber;

        return $this;
    }

    /**
     * Get the value of accountName
     */ 
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set the value of accountName
     *
     * @return  self
     */ 
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }
}
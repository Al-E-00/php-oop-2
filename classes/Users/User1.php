<?php

require_once __DIR__ . "/UserGeneral.php";
require_once __DIR__ . "/../Payment/PayPal.php";
require_once __DIR__ . "/../Payment/AmericanExpress.php";



class User1 extends UserGeneral {
    function __construct()
    {
        $this->setFirstName("Matthew");
        $this->setLastName("Ocasio");
        $this->setAge(32);
        $this->setSubscribedToNewsLetter(false);
        $this->cart = new Cart();
        $this->checkout = new Checkout();
        $this->checkout->setRegistered(true);
        $this->paymentMethods = [
            new PayPal("13/06/2024", "42873981230943", "Matthew Ocasio"),
            new AmericanExpress("20/12/2020", "4312 4656 1234 6445", 633),
            new AmericanExpress("23/08/2029", "4383 4928 4382 4394", 752),
        ];
        $this->checkout->getRegistered();     
        $this->checkout->getFinalPrice();     
        $this->checkout->getTotalDiscount();     
    }
}
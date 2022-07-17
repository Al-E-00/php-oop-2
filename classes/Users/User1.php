<?php

require_once __DIR__ . "/UserGeneral.php";

class User1 extends UserGeneral {
    function __construct()
    {
        $this->setFirstName("Matthew");
        $this->setLastName("Ocasio");
        $this->setAge(32);
        $this->setRegistered(true);
        $this->setSubscribedToNewsLetter(false);
        $this->cart = new Cart();
    }


}
<?php

class Products {
    private string $product;
    private $id;
    private string $forWhatAnimal;
    private float $price;
    private bool $available;
    
    function __construct($_product, $_forWhatAnimal, $_price, $_available) {
        $this->setProduct($_product);
        $this->setForWhatAnimal($_forWhatAnimal);
        $this->setPrice($_price);
        $this->setAvailable($_available);
        $this->setId();
    }
    
    
    /**
     * Get the value of product
     */ 
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * Set the value of product
     *
     * @return  self
     */ 
    public function setProduct($product)
    {
        $this->product = $product;
        
        return $this;
    }
    
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
        
    }
    
    /**
     * Set the value of id
     *
     * @return  self
     */ 
    private function setId()
    {
        $this->id = uniqid("item_");

        return $this;
    }

    /**
     * Get the value of ForWhatAnimal
     */ 
    public function getForWhatAnimal()
    {
        return $this->forWhatAnimal;
    }

    /**
     * Set the value of ForWhatAnimal
     *
     * @return  self
     */ 
    public function setForWhatAnimal($forWhatAnimal)
    {
        $this->forWhatAnimal = $forWhatAnimal;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    /**
     * Get the value of available
     */ 
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set the value of available
     *
     * @return  self
     */ 
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }
}
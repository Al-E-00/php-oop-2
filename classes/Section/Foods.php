<?php

require_once __DIR__ . "/Products.php";

class Foods extends Products {
    private $expirationDate;
    private $ingredients;
    private $vegan;
    

    /**
     * Get the value of expirationDate
     */ 
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */ 
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of vegan
     */ 
    public function getVegan()
    {
        return $this->vegan;
    }

    /**
     * Set the value of vegan
     *
     * @return  self
     */ 
    public function setVegan($vegan)
    {
        $this->vegan = $vegan;

        return $this;
    }
}
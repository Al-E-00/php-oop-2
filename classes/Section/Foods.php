<?php

require_once __DIR__ . "/Products.php";

class Foods extends Products {
    private string $expirationDate;
    private array $ingredients;
    private bool $vegan;

    function __construct($_product, $_forWhatAnimal, $_price, $_available, $_expirationDate, $_ingredients, $_vegan)
    {
        parent::__construct($_product, $_forWhatAnimal, $_price, $_available);
        $this->setExpirationDate($_expirationDate);
        $this->setIngredients($_ingredients);
        $this->setVegan($_vegan);
    }
    

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
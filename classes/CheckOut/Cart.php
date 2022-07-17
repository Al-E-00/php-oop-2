<?php 

class Cart {
    private $totalItems;
    private $totalPrice;

    /**
     * Get the value of totalItems
     */ 
    public function getTotalItems()
    {
        return $this->totalItems;
    }

    /**
     * Set the value of totalItems
     *
     * @return  self
     */ 
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;

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
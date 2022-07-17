<?php
class Cart
{
    private $products = [];

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function removeProduct($product)
    {
        unset($product[$product]);
    }
    
    /* 
    function that returns the total cost of the products inside the cart
    */
    public function getTotal($discount=0)
    {
        $total = 0;
        
        foreach($this->products as $product) {
            $total = $product[3];
        }
    }

    //getter
    public function getProducts()
    {
        return $this->products;
    
    }
}

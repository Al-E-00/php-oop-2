<?php
class Cart
{
    private $products = [];

    public function addProducts(...$_products)
    {
        array_push($this->products, ...$_products);
    }

    public function removeProduct($product)
    {
        unset($product[$product]);
    }

    /* 
    function that returns the total cost of the products inside the cart
    */
    public function getTotal($discount= 0)
    {
        $total = 0; 
        
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }    

    //getter
    public function getProducts()
    {
        return $this->products;
    
    }
}

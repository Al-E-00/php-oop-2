<?php
require_once __DIR__ . "/Checkout.php";
class Cart extends Checkout
{
    function __construct()
    {
        $this->setTotalDiscount(
            $this->getRegistered() ? 0 : 20
        );
        $this->setFinalPrice(
            $this->getTotal() * $this->getTotalDiscount() / 100
        );
    }

    private $products = [];

    public function addProducts(...$_products)
    {
        array_push($this->products, ...$_products);
    }

    /* 
    function that returns the total cost of the products inside the cart
    */
    public function getTotal()
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

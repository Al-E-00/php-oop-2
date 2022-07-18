<!-- The commerce online sells product for animals
The products will be in addition to foods, also game, kennels, ecc.
The user will be able as well as buy products without being registered, also
subscribe and receive a 20% of discount on all the products.
The payment is with credit card that mustn't be expired. 

BONUS: 
Some products (ex. anti-fleas) will have the peculiarity that they will be
available only for a particular period (ex. from may to august);
-->

<?php

require_once __DIR__ . "/classes/Section/Foods.php";
require_once __DIR__ . "/classes/Section/Games.php";
require_once __DIR__ . "/classes/Section/Kennels.php";
require_once __DIR__ . "/classes/Users/User1.php";


//the following lines of code is to add some products inside the different categories
$products = [
    new Kennels("Kennels for outdoor", "Dog", 12.23, true, "Wood and iron", "XXL", true, false),
    new Kennels("Kitten kennels", "Cat", 54.22, "No", "Plastic and metal", "SM", false, true),
    new Game("Ball", "Cat/Dog", 12.99, "Yes", "Red and Blue", "Plastic", "M", "12.44 g", 4),
    new Foods("Dry food", "Cat", 32.54, "Yes", "13/02/2023", ["Meat, Salt, Vegetables"], "No"),
];

//added new user
$user = [
    new User1(),
];


try {
    $user[0]->cart->addProducts($products[0], $products[3]);
} catch(Exception $e){
    echo "user not correct";
}

/* var_dump($products);
var_dump($user);

var_dump($user[0]->cart->getProducts());
var_dump($user[0]->paymentMethods); */
var_dump($user[0]->cart->getTotal());
var_dump($user[0]->checkout->getRegistered());
var_dump($user[0]->cart->getFinalPrice());
var_dump($user[0]->checkout->getTotalDiscount());
var_dump($user[0]->checkout->getFinalPrice());
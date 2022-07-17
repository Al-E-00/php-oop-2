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

$kennels = new Kennels("Kennels for outdoor", "Dog", 12.23, true, "Wood and iron", "XXL", true, false);
$kennels2 = new Kennels("Kitten kennels", "Cat", 54.22, "No", "Plastic and metal", "SM", false, true);
$game = new Game("Ball", "Cat/Dog", 12.99, "Yes", "Red and Blue", "Plastic", "M", "12.44 g", 4);
$food = new Foods("Dry food", "Cat", 32.54, "Yes", "13/02/2023", "Meat, Salt, Vegetables", "No");

$user1 = new User1();

$user1->cart->addProduct([$kennels]);
$user1->cart->addProduct([$food]);

var_dump($kennels);
var_dump($kennels2);
var_dump($game);
var_dump($food);
var_dump($user1);


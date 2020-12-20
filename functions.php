<?php 
//mysql connection
require('database/DBController.php');

//product class
require('database/Product.php');

//cart class
require('database/Cart.php');

$db = new DBController();

//product object
$product = new Product($db);
$productShuffle = $product->getData();
$product->getData();

print_r($product->getData());

//Cart Object
$cart = new Cart($db);

print_r($cart->getCartId($product->getData('cart')));

?>
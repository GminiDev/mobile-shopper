<?php
ob_start();
//require MySQL Connection
require('database/DBController.php');

//require Product Class
require('database/Product.php');

//require Cart Class
require('database/Cart.php');

//DBController Object
$db = new DBController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart object
$Cart = new Cart($db);

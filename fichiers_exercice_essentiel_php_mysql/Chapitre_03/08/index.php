<?php

class Product
{
    function __toString() {
        return "Class Product";
    }
}
   
class User
{
    function __toString() {
        return "Class User";
    }
}

$product = new Product();
$user = new User();
   
$tmp = $product;
$product = &$user;
$user = $tmp;

var_dump($product . "\n");
var_dump($user . "\n");

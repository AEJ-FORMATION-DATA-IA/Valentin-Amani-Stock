<?php

class Product {

    private $name;

    /** @var User */
    private $user;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser(User $user) {
        $this->user = $user;
    }
}

class User {

    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

}
$user = new User('email@localhost');
$product = new Product('name1');
echo $product->getName();
$product->setName('name2');
echo $product->getName();
$product->setUser($user);
$userEmail = $product->getUser()->getEmail();
echo $userEmail;
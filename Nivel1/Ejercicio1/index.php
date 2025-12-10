<?php
require_once 'Animal.php';
require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Mouse.php';

$dog = new Dog("Firu");
$cat = new Cat("Garfield");
$mouse = new Mouse("Lord of Darkness");

echo $dog->speak() . "<br>"
. $cat->speak() . "<br>"
. $mouse->speak();

?>
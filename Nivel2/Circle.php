<?php

class Circle implements Shape2 {

   private float $radius;

   public function __construct($radius){
    $this->radius = $radius; 
   }

   public function calculateArea(): float {
    return pi() * ($this->radius ** 2);
   }

}

?>
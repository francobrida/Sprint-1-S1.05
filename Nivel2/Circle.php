<?php

class Circle extends Shape{

   public function __construct(float $radius){
        parent::__construct(0, 0, $radius);
   }
   
   public function calculateArea(): float {
    return pi() * ($this->getRadius() ** 2);
   }

}

?>
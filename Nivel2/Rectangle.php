<?php

class Rectangle extends Shape {
    
    public function __construct(float $width, float $height){
        parent::__construct($width, $height, 0);
    }

    public function calculateArea():float{
         return $this->getWidth() * $this->getHeight();
    }
}

?>
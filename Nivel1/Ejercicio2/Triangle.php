<?php

class Triangle extends Shape {

    public function __construct(float $width,float $height) {
        return parent::__construct($width, $height);
    }

    public function calculateArea() {
        return ($this->getWidth() * $this->getHeight()) / 2;
    }
}

?>
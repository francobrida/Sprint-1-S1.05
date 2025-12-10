<?php

class Rectangle extends Shape {

    public function calculateArea():float{
         return $this->getWidth() * $this->getHeight();
    }
}

?>
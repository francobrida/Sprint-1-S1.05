<?php

abstract class Shape {

    private float $width;
    private float $height;

    public function __construct(float $width, float $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(){
        return $this->width;
    }

    public function getHeight(){
        return $this->height;
    }

    public function setWidth(float $width){
        $this->width = $width;
    }

    public function setHeight(float $height){
        $this->height = $height;
    }

    abstract function calculateArea(); 

}

?>
<?php

abstract class Shape {

    private float $width;
    private float $height;
    private float $radius;

    public function __construct(float $width, float $height, float $radius){
        $this->width = $width;
        $this->height = $height;
        $this->radius = $radius;
    }
    
    public function getWidth():float{
        return $this->width;
    }

    public function getHeight():float{
        return $this->height;
    }

    public function getRadius():float{
        return $this->radius;
    }

    abstract function calculateArea():float; 

}

?>
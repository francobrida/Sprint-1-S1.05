<?php

abstract class Shape {

    abstract function calculateArea():float; 

}

/* I changed the interface to an abstract class, even though they only share a method 
(and that made me think of an interface) Circle, Rectangle, etc ARE shapes. 
Still, I'm yet a bit unsure about when to use each... */

?>
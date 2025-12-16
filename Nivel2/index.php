<?php
require_once "Shape.php";
require_once "Circle.php";
require_once "Rectangle.php";

$newCircle = new Circle(34.5);
$newRectangle = new Rectangle(3.60,12);

echo "Circle area: " . $newCircle->calculateArea() . "<br>"
. "Rectangle area: " . $newRectangle->calculateArea();

?>
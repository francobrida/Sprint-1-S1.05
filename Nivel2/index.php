<?php
require_once "Shape2.php";
require_once "Circle.php";

$newCircle = new Circle(12, 34);

echo "Circle area: " . $newCircle->calculateArea();

?>
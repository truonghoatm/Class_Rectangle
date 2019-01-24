<?php include "Rectangle.php" ?>
<?php
$rectangle = new Rectangle($width,$height);
$rectangle->width = 30;
$rectangle->height = 20;
echo $rectangle->width . "<br/>";
echo $rectangle->height . "<br/>";
echo $rectangle->getPerimeter() . "<br/>";
echo $rectangle->getArea() . "<br/>";
echo "Your Rectangle:"." " . $rectangle->display();


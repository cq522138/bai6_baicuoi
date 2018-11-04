<?php
/**
 * Created by PhpStorm.
 * User: vutuanlinh
 * Date: 11/2/18
 * Time: 9:45 AM
 */
interface Colorable
{
    public function howToColor();

}
class Square implements Colorable
{
    public function howToColor()
    {
        echo "Color all four sides";
    }
}

class Rectangle
{
}

$square = new Square();
$square2 = new Square();
$rectangle = new Rectangle();
$shapes=[$square,$square2,$rectangle];
foreach ($shapes as $shape){
    if ($shape instanceof Colorable){
        $shape->howToColor();
    }
}


<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 24/01/2019
 * Time: 15:58
 */

class Rectangle
{
    public $width;
    public $height;

    function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return (($this->height + $this->width) * 2);
    }

    public function display()
    {
        return "Rectangle{". "width=" . $this->width . ",". "height=". $this->height . "}";
    }
}
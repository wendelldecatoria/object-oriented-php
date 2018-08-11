<?php

abstract class Shape{ // abstract cannot be instantiated

    protected $color;

    public function __construct($color='red'){
        $this->color = $color;
    }

    abstract protected function getArea(); // empty method here just create a contract

    public function getColor(){
        return $this->color;
    }

    
}

class Square extends Shape {

    protected $length;

    public function getArea(){
        
        return pow($this->length, 2);
    }
}

class Triangle extends Shape {

    protected $base = 4;
    protected $height = 7;

    public function getArea(){

        return 0.5 * $this->base * $this->height;
    }
}

class Circle extends Shape {

    protected $radius = 5;

    public function getArea(){
        
        return M_PI * pow($this->radius, 2);
    }
}

// echo (new Square())->get();

$square = new Square('green');
// echo $square->getColor();

$circle = new Circle;
echo $circle->getArea();

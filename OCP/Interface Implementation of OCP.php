<?php

// Define an interface for all shapes
interface Shape {
    public function getArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementing the interface method
    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementing the interface method
    public function getArea() {
        return $this->width * $this->height;
    }
}

class Triangle implements Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    // Implementing the interface method
    public function getArea() {
        return 0.5 * $this->base * $this->height;
    }
}

// AreaCalculator can work with any shape that implements the Shape interface
class AreaCalculator {
    public function calculate(Shape $shape) {
        return $shape->getArea();
    }
}

// Usage
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
$triangle = new Triangle(3, 8);

$calculator = new AreaCalculator();

echo "Circle Area: " . $calculator->calculate($circle) . "\n";
echo "Rectangle Area: " . $calculator->calculate($rectangle) . "\n";
echo "Triangle Area: " . $calculator->calculate($triangle) . "\n";

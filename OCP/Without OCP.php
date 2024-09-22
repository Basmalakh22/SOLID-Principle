 <?php
    class Shape {
        public function getArea($shape) {
            if ($shape instanceof Circle) {
                return pi() * pow($shape->radius, 2);
            } elseif ($shape instanceof Rectangle) {
                return $shape->width * $shape->height;
            }
            // More shapes will require modifying this method
        }
    }
    
    class Circle {
        public $radius;
        
        public function __construct($radius) {
            $this->radius = $radius;
        }
    }
    
    class Rectangle {
        public $width;
        public $height;
    
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
    }
   

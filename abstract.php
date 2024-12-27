<?php
  abstract class Shape {
    protected $name;

    public function __construct($name) {
      $this->name = $name;
    }

    // Abstract method
    abstract public function calculateArea();

    // Concrete method
    public function getName() {
      return $this->name;
    }
  }

  class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
      parent::__construct($name);

      $this->radius = $radius;
    }
    
    public function calculateArea() {
      return pi() * pow($this->radius, 2);
    }
  }

  class Rectangle extends Shape {
    private $height;
    private $width;

    public function __construct($name, $height, $width) {
      parent::__construct($name);

      $this->height = $height;
      $this->width = $width;
    }

    public function calculateArea() {
      return $this->width * $this->height;
    }
  }

  $circle = new Circle('Circle', 5);
  $rectangle = new Rectangle('Rectangle', 4, 6);

  echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br>';
  echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea() . '<br>';
?>
<?php
  // Global scope
  $name = 'Alice';

  function sayHello() {
    // Fix: add global to variable
    global $name;
    // Local scope
    $name = 'Bob';
    echo 'Hello ' . $name;
  }

  echo $name; // Alice
  
  sayHello() // Error: Undefined variable '$name'
?>
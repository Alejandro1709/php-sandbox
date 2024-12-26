<?php
  // functions

  function sayHello() {
    echo 'Hello';
  }

  sayHello();

  function sayGoodbye() {
    return 'Goodbye';
  }

  $goodbye = sayGoodbye();

  echo $goodbye;

  // parameters and arguments

  function add($a = 1, $b = 1) { // default parameters
    return $a + $b;
  }

  echo add(1, 2);
  echo '<br>';
  echo add(100, 250);
  echo '<br>';
  echo add();

  function sayHelloTo($name) {
    return "Hello $name";
  }

  sayHelloTo('Alejandro');

  // Splat operator

  function addAll(...$numbers) {
    $total = 0;

    foreach ($numbers as $number) {
      $total += $number;
    }

    return $total;
  }

  addAll(1,3,4,3);
?>
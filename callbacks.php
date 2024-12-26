<?php
  $numbers = [1, 2, 3, 4, 5];

  $squared = array_map(function($number) {
    return $number  * $number;
  }, $numbers);

  print_r($squared);

  function applyCallback($cb, $value) {
    return $cb($value);
  }

  $double = function($number) {
    return $number * 2;
  };

  $result = applyCallback($double, 5);
?>
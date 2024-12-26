<?php
  $add = fn ($a, $b) => $a + $b;

  echo $add(3,4);

  $numbers = [1,2,3,4,5];

  $squared = array_map(fn ($number) => $number * 2, $numbers)
?>
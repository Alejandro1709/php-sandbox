<?php
  // Ternary Operator

  /*
    1. The condition to check.
    2. The value of expression to return if true.
    3. The value of expression to return if false.
    
    condition ? expression : expression2
  */

  $score = 50;

  if ($score > 40) {
    echo 'High Score!';
  } else {
    echo 'Low Score';
  }

  $result = $score > 40 ? 'High Score!' : 'Low Score';

  echo $result;
?>
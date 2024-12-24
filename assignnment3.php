<?php
  // for ($i = 1; $i <= 10; $i++) {
  //   for ($j = 1; $j <= 10; $j++) {
  //     echo "$i x $j = " . $i * $j . "<br>";
  //   }
  // }

  // $numbers = [1, 2, 3, 4, 5];
  // $sum = 0;

  // foreach ($numbers as $number) {
  //   $sum = $sum + $number;
  // }

  // echo $sum;

  $students = [
    [
      'name' => 'John',
      'grades' => [85, 90, 92, 88]
    ],
    [
      'name' => 'Jane',
      'grades' => [75, 100, 72, 83]
    ],
    [
      'name' => 'Joe',
      'grades' => [56, 67, 60, 100]
    ]
  ];

  foreach ($students as $student) {
    $name = $student['name'];
    $grades = $student['grades'];

    $average = array_sum($grades) / count($grades);

    echo "$name: Average Grade = $average <br>";
  }
?>
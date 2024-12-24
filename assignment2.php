<?php
  $numbers = [1,2,3,4,5];

  $sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];

  $count = count($numbers);

  echo "The sum of the $count numbers is: $sum" . "<br >";

  $colors = ['red', 'blue', 'green', 'yellow'];

  $reversed = array_reverse($colors);

  $reversed[] = 'purple';
  $reversed[] = 'orange';

  $reversed[1] = 'pink';
  array_pop($reversed);

  print_r($reversed);

  $jobListing = [
    ["id" => 1,"job_title" => "Ios Engineer", "company" => "Apple", "contact_email" => "ale@hotmail.com", "contact_phone" => "999999999", "skills" => ["Swift", "HTML", "Javascript", "Php"] ],
    ["id" => 2, "job_title" => "React Engineer", "company" => "Microsoft", "contact_email" => "ale@hotmail.com", "contact_phone" => "999999999", "skills" => ["Swift", "HTML", "Javascript", "Php"] ],
    ["id" => 3, "job_title" => "Backend Engineer", "company" => "Tesla", "contact_email" => "ale@hotmail.com", "contact_phone" => "999999999", "skills" => ["Swift", "HTML", "Javascript", "Php"] ],
  ];

  array_push($jobListing, ["id" => 4, "job_title" => "Backend Engineer", "company" => "Disney", "contact_email" => "ale@hotmail.com", "contact_phone" => "999999999", "skills" => ["Swift", "HTML", "Javascript", "Php"]]);

  echo $jobListing[1]["job_title"];
  echo $jobListing[2]["skills"][0];
?>
<?php
  $output = null;

  $fruits = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'Yellow']
  ];

  $output = $fruits[0][1];

  $fruits[] = ['Grape', 'Purple'];

  $users = [
    ['name' => 'John', 'email' => 'john@email.com', 'password' => '1234567'],
    ['name' => 'Mary', 'email' => 'mary@email.com', 'password' => '1234567'],
    ['name' => 'Ken', 'email' => 'ken@email.com', 'password' => '1234567'],
  ];

  $users[] = ['name' => 'Alejandro', 'email' => 'ale@email.com', 'password' => '123456'];

  array_push($users, ['name' => 'Francesca', 'email' => 'fran@email.com', 'password' => '123456']);

  $output = $users[1]['email']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
           <p class="text-xl"><?= $output ?></p>
           <p>
            <pre>
              <?php print_r($users) ?>
            </pre>
           </p>
        </div>
    </div>
</body>

</html>
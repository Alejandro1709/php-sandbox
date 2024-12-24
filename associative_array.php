<?php
  $output = null;

  $user = [
    'name' => 'John',
    'email' => 'john@email.com',
    'password' => '1234567',
    'hobbies' => ['Tennis', 'Video Games']
  ];

  $output = $user['name'];
  $output = $user['email'];

  $output = $user['hobbies'][0];

  $user['address'] = '123 Main Street';

  unset($user['address']);
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
            <h2 class="text-xl font-semibold my-4">User Array:</h2>
            <p>
              <pre>
                <?php print_r($user) ?>
              </pre>
            </p>
        </div>
    </div>
</body>

</html>
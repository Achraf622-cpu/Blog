<?php
$title = "Welcome to My Tailwind PHP Page!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind with PHP</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <div class="p-8 bg-gray-200 min-h-screen">
        <h1 class="text-4xl text-blue-600 font-bold text-center"><?php echo $title; ?></h1>
    </div>
</body>
</html>

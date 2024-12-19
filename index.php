
<?php $title = "Welcome to My Blog!"; 
require './conexions/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-gray-900 to-gray-800 text-white">
    <div class="flex min-h-screen">

        <aside class="w-1/4 bg-gray-800 p-6 border-r border-gray-700">
            <h2 class="text-3xl font-extrabold text-blue-400 mb-6"><?php echo '$user' ?></h2>
            <ul class="space-y-6">
                <li><a href="./Profile/verification.php" class="block text-white hover:text-blue-400 transition duration-300">Profile</a></li>
                <li><a href="index.php" class="block text-white hover:text-blue-400 transition duration-300">Home</a></li>
                <li><a href="#" class="block text-white hover:text-blue-400 transition duration-300">Navigate Tags</a></li>
            </ul>
        </aside>

        <main class="w-3/4 p-8 bg-gray-900">
            <div class="text-center mb-10">
                <h1 class="text-5xl font-extrabold text-blue-400 mb-4"> <?php echo $title; ?> </h1>
                <p class="text-lg text-gray-300">Discover the latest articles and stories</p>
            </div>
        </main>
    </div>
</body>
</html>

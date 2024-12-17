
<?php $title = "Welcome to My Blog!"; 
require './conexions/connect.php';
$result = $conn ->query("SELECT * FROM articles");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 text-white font-sans">
    <div class="flex min-h-screen">
        
        <aside class="w-1/4 bg-gray-800 p-6 border-r border-gray-700 shadow-lg">
            <div class="mb-8 text-center">
                <img src="" alt="#" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md">
                <h2 class="text-3xl font-extrabold text-blue-400">Menu</h2>
            </div>
            <ul class="space-y-6">
            <li><a href="./Profile/verification.php" class="block text-white hover:text-blue-400 transition duration-300">Profile</a></li>
                <li><a href="#" class="block text-white hover:text-blue-400 transition duration-300">Home</a></li>
                <li><a href="#" class="block text-white hover:text-blue-400 transition duration-300">Navigate Tags</a></li>
            </ul>
        </aside>

        
        <main class="w-3/4 p-8 bg-gray-900">
           
            <div class="relative text-center mb-10">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-blue-500 to-transparent opacity-10 rounded-full blur-3xl"></div>
                <h1 class="text-6xl font-extrabold text-blue-400 mb-4 drop-shadow-lg">Title</h1>
                <p class="text-lg text-gray-300 italic">Discover the latest articles and stories</p>
            </div>

            <!-- Articles Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <article class="p-6 bg-gray-800 rounded-xl shadow-xl overflow-hidden relative group transform transition-transform duration-300 hover:scale-105">
                            <!-- Decorative Background -->
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-transparent opacity-10 group-hover:opacity-20 transition duration-300"></div>
                            <!-- Content -->
                            <h2 class="text-2xl font-bold text-blue-400 mb-3 group-hover:text-blue-300 transition duration-300"> Title </h2>
                            <p class="text-gray-300 mb-4 leading-relaxed"> Content </p>
                            <p class="text-sm text-gray-400 italic">Published on Date></p>
                            <!-- Hover effect -->
                            <div class="absolute bottom-0 left-0 w-full h-1 bg-blue-400 scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-300"></div>
                        </article>

                    <p class="text-gray-400 text-center text-2xl col-span-full">No articles available.</p>
            </div>
        </main>
    </div>
</body>

</html>
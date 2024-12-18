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
            <h2 class="text-3xl font-extrabold text-blue-400 mb-6">User</h2>
            <ul class="space-y-6">
                <li><a href="./Profile/verification.php" class="block text-white hover:text-blue-400 transition duration-300">Profile</a></li>
                <li><a href="#" class="block text-white hover:text-blue-400 transition duration-300">Home</a></li>
                <li><a href="#" class="block text-white hover:text-blue-400 transition duration-300">Navigate Tags</a></li>
                <li><a href="#" class="block text-white hover:text-blue-400 transition duration-300">Users</a></li> <!-- New navigation item -->
            </ul>
        </aside>


        <main class="w-3/4 p-8 bg-gray-900">

            <div class="text-center mb-6">
                <p class="text-lg text-gray-300">You're an admin</p>
            </div>

            <div class="text-center mb-10">
                <h1 class="text-5xl font-extrabold text-blue-400 mb-4">Welcome to My Blog!</h1>
                <p class="text-lg text-gray-300">Discover the latest articles and stories</p>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="relative bg-gray-900 p-6 rounded-lg shadow-lg">
  
                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    <img src="https://via.placeholder.com/400x200" alt="Blog Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-2xl font-bold text-blue-400 mb-2">Blog Title 1</h3>
                    <p class="text-gray-300 mb-4">This is a short description of the blog post. It can go here with some content about the post...</p>
                    <div class="flex space-x-2">
                        <span class="bg-blue-600 text-white text-xs py-1 px-3 rounded-full">Tag1</span>
                        <span class="bg-green-600 text-white text-xs py-1 px-3 rounded-full">Tag2</span>
                    </div>
                </div>


                <div class="relative bg-gray-900 p-6 rounded-lg shadow-lg">

                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    <img src="https://via.placeholder.com/400x200" alt="Blog Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-2xl font-bold text-blue-400 mb-2">Blog Title 2</h3>
                    <p class="text-gray-300 mb-4">This is a short description of the second blog post. This one talks about something different...</p>
                    <div class="flex space-x-2">
                        <span class="bg-blue-600 text-white text-xs py-1 px-3 rounded-full">Tag1</span>
                        <span class="bg-yellow-600 text-white text-xs py-1 px-3 rounded-full">Tag3</span>
                    </div>
                </div>


                <div class="relative bg-gray-900 p-6 rounded-lg shadow-lg">

                    <button class="absolute top-4 right-4 text-red-500 hover:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    <img src="https://via.placeholder.com/400x200" alt="Blog Image" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-2xl font-bold text-blue-400 mb-2">Blog Title 3</h3>
                    <p class="text-gray-300 mb-4">Here is another blog post description, where content and context are shown for this specific blog...</p>
                    <div class="flex space-x-2">
                        <span class="bg-red-600 text-white text-xs py-1 px-3 rounded-full">Tag2</span>
                        <span class="bg-purple-600 text-white text-xs py-1 px-3 rounded-full">Tag4</span>
                    </div>
                </div>
            </div>

        </main>

    </div>

</body>
</html>

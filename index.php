<?php 
$title = "Welcome to My Blog!";
require './conexions/connect.php';
session_start();
$query = "SELECT a.id, a.titre, a.para, a.img, GROUP_CONCAT(t.tag) AS tags 
          FROM articles a 
          LEFT JOIN tagart ta ON a.id = ta.id_article 
          LEFT JOIN tags t ON ta.id_tag = t.id 
          GROUP BY a.id 
          ORDER BY a.id DESC";
$result = $conn->query($query);
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
            <h2 class="text-3xl font-extrabold text-blue-400 mb-6">
                <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?>
            </h2>
            <ul class="space-y-6">
                <li><a href="./Profile/verification.php" class="block text-white hover:text-blue-400 transition duration-300">Profile</a></li>
                <li><a href="index.php" class="block text-white hover:text-blue-400 transition duration-300">Home</a></li>
                <li><a href="#" class="block text-white hover:text-blue-400 transition duration-300">Navigate Tags</a></li>
            </ul>
        </aside>

        <main class="w-3/4 p-8 bg-gray-900">

            <div class="text-center mb-10">
                <h1 class="text-5xl font-extrabold text-blue-400 mb-4"><?php echo $title; ?></h1>
                <p class="text-lg text-gray-300">Discover the latest articles and stories</p>
            </div>

            <div class="space-y-8">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                            <h2 class="text-2xl font-bold text-blue-400"><?php echo htmlspecialchars($row['titre']); ?></h2>
                            <?php if (!empty($row['img'])): ?>
                                <img src="<?php echo htmlspecialchars($row['img']); ?>" alt="<?php echo htmlspecialchars($row['titre']); ?>" class="w-full rounded-lg mt-4">
                            <?php endif; ?>
                            <p class="text-gray-400 mt-4"><?php echo htmlspecialchars($row['para']); ?></p>
                            <p class="text-gray-500 text-sm mt-2">Tags: <?php echo htmlspecialchars($row['tags']) ?: 'None'; ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p class="text-gray-400">No articles found.</p>
                <?php endif; ?>
            </div>
        </main>
    </div>
</body>
</html>

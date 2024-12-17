<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        
        if (password_verify($password, $user['password'])) {
            
            $token = bin2hex(random_bytes(16));

            
            $stmt = $conn->prepare("INSERT INTO login (userId, token) VALUES (?, ?)");
            $stmt->bind_param("is", $user['id'], $token);
            $stmt->execute();

            
            setcookie("user_id", $user['id'], time() + (86400 * 7), "/");
            setcookie("auth_token", $token, time() + (86400 * 7), "/");

            header("Location: ../index.php");
            exit;
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-white w-full max-w-md mx-4 p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold text-center text-gray-700 mb-6">Login</h2>
        <form method="POST">
            <div class="mb-4">
                <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <input type="password" name="password" placeholder="Password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
        </form>
        <p class="mt-4 text-center text-sm text-gray-600">Don't have an account? <a href="register.php" class="text-blue-500 hover:text-blue-700">Register here</a></p>
    </div>
</div>
</body>
</html>

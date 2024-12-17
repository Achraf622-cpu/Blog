<?php
require 'connect.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
     
        $token = bin2hex(random_bytes(16));


        $stmt = $conn->prepare("INSERT INTO login (userId, ip_address, browser, token) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("is", $user['id'], $token);
        $stmt->execute();


        setcookie("user_id", $user['id'], time() + (86400 * 7), "/"); // Valid for 7 days
        setcookie("auth_token", $token, time() + (86400 * 7), "/");

        header("Location: ../index.php");
        exit;
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
}
?>

<form method="POST">
    <h2>Login</h2>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</form>
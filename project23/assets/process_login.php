<?php
session_start(); // Start session

$users = [
    [
        "username" => "phieu",
        "password" => password_hash("password123", PASSWORD_DEFAULT), // Store hashed password
        "name" => "John Doe",
        "email" => "johndoe@example.com"
    ],
    // Add more users...
    [
        "username" => "banhmi",
        "password" => password_hash("123456", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Van Lam",
        "email" => "banhmichien@gmail.com"
    ],
    [
        "username" => "abc123",
        "password" => password_hash("abcd", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Quang Hai",
        "email" => "quanghai19@gmail.com"
    ],
    [
        "username" => "hoanghon",
        "password" => password_hash("abc123", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Hoang Hon",
        "email" => "lmao555@gmail.com"
    ],
    [
        "username" => "newhope",
        "password" => password_hash("123456", PASSWORD_DEFAULT), // Store hashed password
        "name" => "John",
        "email" => "johndoe@example.com"
    ],
];

$username = $_POST['username'];
$password = $_POST['password'];

// Check if username exists
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user && password_verify($password, $user['password'])) {
    // Login successful
    $_SESSION['user_id'] = $user['username']; // Store user ID in session
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Set cookie for 30 days
    header('Location: profile.php'); // Redirect to profile page
    exit;
} else {
    // Login failed
    echo "Invalid username or password.";
}
?>

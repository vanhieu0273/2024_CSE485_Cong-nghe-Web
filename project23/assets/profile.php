<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php'); // Redirect to login if not authenticated
}
$username = $_SESSION['user_id'];
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

// Retrieve user data from array using the username
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user) {
    // Display user information
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
    // ... display other user details
} else {
    echo "Error: User not found.";
}

?>

<form action="logout.php" method="post" enctype="multipart/form-data">
    <br>
    <br>
    <button type ="submit">Logout Here</button>

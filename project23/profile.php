<?php
session_start();

$users = [
    [
        "username" => "johndoe",
        "password" => password_hash("password123", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com"
    ],
    // Add more users...
];

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php');
}

$username = $_SESSION['user_id'];

$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user) {
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
} else {
    echo "Error: User not found.";
}
?>
<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>
<!-- logout.php -->
<?php
session_start();
session_regenerate_id(true);
session_destroy();
setcookie('logged_in', "", 1, "/", true, true); // Secure cookie with HTTP-only and HTTPS
header('Location: login.php');
?>

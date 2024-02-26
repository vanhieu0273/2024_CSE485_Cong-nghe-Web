<!-- edit_user.php -->
<?php
session_start();
$users = [
    [
        "username" => "johndoe",
        "password" => password_hash("password123", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com",
        "role" => "user"
    ],
    [
        "username" => "janedoe",
        "password" => password_hash("password456", PASSWORD_DEFAULT),
        "name" => "Jane Doe",
        "email" => "janedoe@example.com",
        "role" => "admin"
    ],
    // ... add more users
];
$authorization_levels = [
    "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false,
    ],
    "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true,
    ],
    // ... add more levels
];
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
}

$username = $_GET['username'];
$user = null;

foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if (!$user) {
    echo "Lỗi: Người dùng không tồn tại.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Xử lý dữ liệu chỉnh sửa và cập nhật trong cơ sở dữ liệu thực tế
    // (Lưu ý: Cần thêm kiểm tra dữ liệu và xử lý lỗi)
    $newName = $_POST['new_name'];
    $newEmail = $_POST['new_email'];

    // Cập nhật thông tin trong mảng $users (hoặc trong cơ sở dữ liệu thực tế)
    $user['name'] = $newName;
    $user['email'] = $newEmail;

    echo "Thông tin người dùng đã được cập nhật thành công!";
} else {
    // Hiển thị biểu mẫu chỉnh sửa
    echo "<h2>Chỉnh sửa Người dùng: " . $user['name'] . "</h2>";
    echo "<form method='post'>";
    echo "Tên mới: <input type='text' name='new_name' value='" . $user['name'] . "'><br>";
    echo "Email mới: <input type='email' name='new_email' value='" . $user['email'] . "'><br>";
    echo "<button type='submit'>Lưu chỉnh sửa</button>";
    echo "</form>";
}
?>

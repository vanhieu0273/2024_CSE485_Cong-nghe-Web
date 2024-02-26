<?php
require_once "../data/user_data.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and update user information
    $errors = [];
    $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    // Handle avatar upload (similar to previous exercise)
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 1048576; // 1MB
    $targetDir = "../uploads/"; // Đường dẫn đến thư mục lưu trữ ảnh

    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array(strtolower($fileInfo['extension']), $allowedExtensions)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "File size must be less than 1MB.";
        } else {
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user['avatar'] = $targetFile; //
            } else {
                $errors[] = "Failed to upload file.";
            }
        }
    }

    // Lưu trữ lại dữ liệu người dùng đã cập nhật
    file_put_contents("../user_data.php", "<?php\n\$user = " . var_export($user, true) . ";\n?>");

    // Handle errors or update profile
    if (empty($errors)) {
        echo "Profile updated successfully!";
    } else {
        echo "Errors:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
?>

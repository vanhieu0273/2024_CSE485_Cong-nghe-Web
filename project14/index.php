<?php

// Biến lưu trữ thông tin nhân viên
$employee = array(
    "id" => 9,
    "last_name" => "Dodsworth",
    "first_name" => "Anne",
    "gender" => "Female",
    "title" => "Sales Representative",
    "suffix" => "Ms.",
    "birthdate" => "1969-07-02",
    "hiredate" => "1994-11-15",
    "ssn" => "",
    "reports_to" => "Buchanan",
    "notes" => "Đây là phần ghi chú của bạn. Bạn có thể sử dụng định dạng văn bản phong phú tại đây."
);
$contact = array(
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "address" => "123 Main Street",
    "city" => "Anytown",
    "region" => "CA",
    "postal_code" => "91234",
    "country" => "United States",
    "phone" => "(123) 456-7890",
    "photo" => "image.jpg"
);

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin nhân viên</title>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
</head>
<body>
<h1>Thông tin nhân viên</h1>
<form action="process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
    <label for="last_name">Họ:</label>
    <input type="text" name="last_name" id="last_name" value="<?php echo $employee['last_name']; ?>">
    <br>
    <label for="first_name">Tên:</label>
    <input type="text" name="first_name" id="first_name" value="<?php echo $employee['first_name']; ?>">
    <br>
    <label for="gender">Giới tính:</label>
    <select name="gender" id="gender">
        <option value="Male" <?php if ($employee['gender'] === 'Male') echo 'selected'; ?>>Nam</option>
        <option value="Female" <?php if ($employee['gender'] === 'Female') echo 'selected'; ?>>Nữ</option>
    </select>
    <br>
    <label for="title">Chức danh:</label>
    <input type="text" name="title" id="title" value="<?php echo $employee['title']; ?>">
    <br>
    <label for="suffix">Hậu tố:</label>
    <input type="text" name="suffix" id="suffix" value="<?php echo $employee['suffix']; ?>">
    <br>
    <label for="birthdate">Ngày sinh:</label>
    <input type="date" name="birthdate" id="birthdate" value="<?php echo $employee['birthdate']; ?>">
    <br>
    <label for="hiredate">Ngày vào làm:</label>
    <input type="date" name="hiredate" id="hiredate" value="<?php echo $employee['hiredate']; ?>">
    <br>
    <label for="ssn">Số SSN:</label>
    <input type="text" name="ssn" id="ssn" value="<?php echo $employee['ssn']; ?>">
    <br>
    <label for="reports_to">Báo cáo cho:</label>
    <input type="text" name="reports_to" id="reports_to" value="<?php echo $employee['reports_to']; ?>">
    <br>
    <label for="notes">Ghi chú:</label>
    <textarea name="notes" id="notes"><?php echo $employee['notes']; ?></textarea>
    <br>
    <input type="submit" value="Lưu">
</form>
<div class="form-container">
    <h1>Liên hệ</h1>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name" class="form-label">Họ và tên:</label>
            <input type="text" name="name" id="name" class="form-input" value="<?php echo $contact['name']; ?>">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-input" value="<?php echo $contact['email']; ?>">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Địa chỉ:</label>
            <input type="text" name="address" id="address" class="form-input" value="<?php echo $contact['address']; ?>">
        </div>
        <div class="form-group">
            <label for="city" class="form-label">Thành phố:</label>
            <input type="text" name="city" id="city" class="form-input" value="<?php echo $contact['city']; ?>">
        </div>
        <div class="form-group">
            <label for="region" class="form-label">Vùng/Tỉnh:</label>
            <input type="text" name="region" id="region" class="form-input" value="<?php echo $contact['region']; ?>">
        </div>
        <div class="form-group">
            <label for="postal_code" class="form-label">Mã bưu điện:</label>
            <input type="text" name="postal_code" id="postal_code" class="form-input" value="<?php echo $contact['postal_code']; ?>">
        </div>
        <div class="form-group">
            <label for="country" class="form-label">Quốc gia:</label>
            <select name="country" id="country" class="form-input">
                <option value="">Chọn quốc gia</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                ...
            </select>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Số điện thoại:</label>
            <input type="text" name="phone" id="phone" class="form-input" value="<?php echo $contact['phone']; ?>">
        </div>
        <div class="form-group">
            <label for="photo" class="form-label">Ảnh đại diện:</label>
            <input type="file" name="photo" id="photo" class="form-input">
        </div>
        <div class="form-group">
            <input type="submit" value="Gửi" class="form-submit">
        </div>
    </form>
</div>

<script>
    // Khởi tạo CKEditor cho phần ghi chú
    CKEDITOR.replace('notes');
</script>
</body>
</html>


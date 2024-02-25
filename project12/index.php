<?php
$navItems = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuc Hanh</title>
    <style>
        nav {
            background-color: #012580; /* Màu xanh dương */
            color: #fff;
            display: flex;
            align-items: center;
            padding: 10px;
        }
        .divider {
            height: 20px;
            margin: 0 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            padding: 10px;
            margin-right: 10px;
            border-right: 1px solid #fff;
        }

        nav li:first-child {
            border-left: 1px solid #fff; /* Thêm dấu gạch trước mục đầu tiên */
        }

        nav li:last-child {
            border-right: none;
        }
    </style>
</head>
<body>

<nav>
    <div class="home-link">
        <a href="path/to/home" title="Trang chủ">
            <img src="images/house-door.svg">
        </a>
    </div>
    <div class="divider"></div>
    <ul>
        <?php foreach ($navItems as $item): ?>
            <li><?php echo $item; ?></li>
        <?php endforeach; ?>
    </ul>
</nav>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Project12</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

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

$firstItemIcon = "fas fa-home";
?>

<nav>
    <ul>
        <li><i class="<?php echo $firstItemIcon; ?>"></i><a href="#"><?php echo $navItems[0]; ?></a></li>
        <?php foreach (array_slice($navItems, 1) as $item): ?>
            <li><a href="#"><?php echo $item; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
</body>
</html>
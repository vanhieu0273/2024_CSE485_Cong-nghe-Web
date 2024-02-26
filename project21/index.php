<?php

// 1. Xác định các tham số phân trang
$itemsPerPage = 4; // Số mục trên mỗi trang
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Số trang hiện tại

// 2. Tính toán dữ liệu phân trang
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and vietnamese T-shirt",
        "image" => "assets/images/img.png",
    ],
    [
        "id" => 2,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and vietnamese T-shirt",
        "image" => "assets/images/img.png",
    ],
     [
        "id" => 3,
         "name" => "T-Shirt",
         "price" => 15.99,
         "description" => "A comfortable and vietnamese T-shirt",
         "image" => "assets/images/img.png",
    ],
    [
        "id" => 4,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and vietnamese T-shirt",
        "image" => "assets/images/img.png",
    ],
    [
        "id" => 5,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and vietnamese T-shirt",
        "image" => "assets/images/img.png",
    ],
    [
        "id" => 6,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and vietnamese T-shirt",
        "image" => "assets/images/img.png",
    ],
    [
        "id" => 7,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and vietnamese T-shirt",
        "image" => "assets/images/img.png",
    ],
    [
        "id" => 8,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and vietnamese T-shirt",
        "image" => "assets/images/img.png",
    ],
    [
        "id" => 7,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and vietnamese T-shirt",
        "image" => "assets/images/img.png",
    ]
];
$totalPages = ceil(count($products) / $itemsPerPage); // Tổng số trang
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage); // Lấy các mục cho trang hiện tại

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="product-list">
    <?php foreach ($currentPageItems as $product): ?>
        <div class="product">
            <a href="#">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            </a>
            <h3><?php echo $product['name']; ?></h3>
            <p><?php echo $product['price']; ?></p>
            <p><?php echo $product['description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>

<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">next</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">next</a>
    <?php endif; ?>
</div>
</body>
</html>

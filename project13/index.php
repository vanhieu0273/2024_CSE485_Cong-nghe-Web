<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
</head>
<body>
<h3 class="title" style="
    margin-left: 5px;
    padding-left: 7px;
    border-left: 4px red solid;
    color: red;
    margin-bottom: 16px;">
    Khóa học sắp khai giảng
</h3>
<div class="course-container">
<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'title' => 'Lập trình viên viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ 
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'images/img_1.png'
    ],
    [
        'title' => 'Lập trình WebFullStack',
        'description' => 'Khóa học phù hợp với người bắt đầu học lập trình hoặc người chuyển nghề. Trang bị frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'images/img.png'
    ],
    [
        'title' => 'Lập trình Java FullStack',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng java, các ứng dụng doanh nghiệp sử dụng J2EE,Servelt,JPS,Spring framework,EJB,...',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'images/img_2.png'
    ],
    [
        'title' => 'Lập trình PHP&LARAVEL',
        'description' => 'PHP là một trong những ngôn ngữ thiết kế web mạnh nhất . Khóa học này trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp laravelFramework.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'images/img_3.png'
    ],
    [
        'title' => 'Lập trình .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng APS.NET core.MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức c# và frontend.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'images/img_4.png'
    ],
    [
        'title' => 'Lập trình SQL Server',
        'description' => 'Trang bị những nền tảng vững chác về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm',
        'image' => 'images/img_5.png'
    ],
    // Thêm các khóa học khác vào đây
];

// Hiển thị danh sách khóa học
//foreach ($courses as $course) {
//    echo '<div class="course">';
//    echo '<h2>' . $course['title'] . '</h2>';
//    echo '<p>' . $course['description'] . '</p>';
//    echo '<p>Học phí: ' . $course['fee'] . '</p>';
//    echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
//    echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
//    echo '</div>';
//}
foreach ($courses as $course) {
    echo '<div class="course">';
    // Hiển thị hình ảnh
    echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '">'; // Sử dụng trường thông tin image
    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p><i class="fa-solid fa-gift icon" style="color: red"></i> Học phí: ' . $course['fee'] . '</p>';
    echo '<p><i class="fa-solid fa-clock icon" style="color: red"></i> Khải giảng: ' . $course['start_date'] . '</p>';
    echo '<p><i class="fa-solid fa-bookmark icon" style="color: red"></i> Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';
}

?>
</div>
</body>
</html>
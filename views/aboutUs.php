<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #ffeaa7 0%, #fab1a0 100%);
        min-height: 100vh;
        margin: 0;
        padding: 20px 0;
    }

    .container {
        background: white;
        border-radius: 15px;
        margin: 25px auto;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        text-align: center;

    }

    h1 {
        font-weight: 700;
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 30px !important;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2, h4, h5 {
        color: #333;
        line-height: 1.8;
        margin: 20px 0;
    }
    .card-img-top {
        display: block;
        margin: 0 auto;
        margin-top: 15px;
    }
    .card {
        border: none;
        border-radius: 12px;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(210, 105, 30, 0.3);
    }

    .card-title {
        font-weight: 600;
        color: #d2691e;
        margin-top: 15px;
    }

    .card-link {
        color: #d2691e;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
    }

    .card-link:hover {
        color: #a0522d;
        text-decoration: underline;
    }

    .row {
        margin-top: 30px;
    }
</style>
<body>
    <?php
  
        include_once("layouts/header.php");
     
?>
<div class="container">
    <h1 class="mb-3" style="color: #d2691e;">About Us</h1>
    <h2>Chào mừng bạn đến với dự án Sweet Bakery Project - nơi chúng tôi mang đến những chiếc bánh chất lượng, thơm ngon và tràn đầy tâm huyết.</h2>
    <h4>Dự án của chúng tôi được xây dựng với mục tiêu tạo ra một nền tảng giúp khách hàng dễ dàng tìm kiếm, lựa chọn và đặt những mẫu bánh phù hợp cho mọi dịp như sinh nhật, lễ kỷ niệm, sự kiện, hoặc đơn giản chỉ là thưởng thức hằng ngày.</h4>
    <h5>Dự án của chúng tôi được xây dựng với mục tiêu tạo ra một nền tảng giúp khách hàng dễ dàng tìm kiếm, lựa chọn và đặt những mẫu bánh phù hợp cho mọi dịp như sinh nhật, lễ kỷ niệm, sự kiện, hoặc đơn giản chỉ là thưởng thức hằng ngày.</h5>
    <h2 class="mt-4" style="color: #870f15ff;">Thành viên nhóm</h2>
    <div class="row">
        <?php
        $team = [
            [
                'name' => 'Dương Quốc Anh',
                'role' => 'Quản lý dự án',
                'bio'  => 'Chịu trách nhiệm điều phối và quản lý tiến độ.',
                'img'  => '/assets/images/default.jpg',
                'email'=> 'duongquocanh@gmail.com'
            ],
            [
                'name' => 'Đặng Thành Trung',
                'role' => 'Lập trình viên Back-end',
                'email'=> 'nguyenthanhtrung@example.com',
                'bio'  => 'Phát triển API và xử lý cơ sở dữ liệu.',
                'img'  => 'views/img/aboutUs/trung.jpg'
            ],
            [
                'name' => 'Nguyễn Văn Trung',
                'role' => 'Front-end Developer',
                'bio'  => 'Thiết kế giao diện và trải nghiệm người dùng.',
                'img'  => 'views/img/aboutUs/trung.jpg',
                'email'=> 'nguyenvantrung@example.com'
            ],
            [
                'name' => 'Phí Quốc Cường',
                'role' => 'Front-end Developer',
                'bio'  => 'Thiết kế giao diện và trải nghiệm người dùng.',
                'img'  => 'views/ac.jpg',
                'email'=> 'phiquoccuong@example.com'
            ],
            [
                'name' => 'Văn Mạnh',
                'role' => 'Front-end Developer',
                'bio'  => 'Thiết kế giao diện và trải nghiệm người dùng.',
                'img'  => '/assets/images/van-c.jpg',
                'email'=> 'vanmanh@example.com'
            ],
        ];

        foreach ($team as $member) {
            $name  = htmlspecialchars($member['name']);
            $role  = htmlspecialchars($member['role']);
            $bio   = htmlspecialchars($member['bio']);
            $img   = htmlspecialchars($member['img']);
            $email = htmlspecialchars($member['email']);

            echo "
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <img src=\"{$img}\" class=\"card-img-top\" alt=\"{$name}\" style=\"object-fit:cover;height:220px;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{$name}</h5>
                        <p class=\"card-subtitle text-muted\">{$role}</p>
                        <p class=\"card-text mt-2\">{$bio}</p>
                        <a href=\"mailto:{$email}\" class=\"card-link\">{$email}</a>
                    </div>
                </div>
            </div>";
        }
        ?>
    </div>


<?php
    include_once("layouts/footer.php");
?>
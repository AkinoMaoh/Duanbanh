
    <?php
  
        include_once("layouts/header.php");
     
?>
<div class="container">
    <h1 class="mb-3" style="color: #d2691e;">About Us</h1>
    <h2>Chào mừng bạn đến với dự án Sweet Bakery Project - nơi chúng tôi mang đến những chiếc bánh chất lượng, thơm ngon và tràn đầy tâm huyết.</h2>
    <h4>Dự án của chúng tôi được xây dựng với mục tiêu tạo ra một nền tảng giúp khách hàng dễ dàng tìm kiếm, lựa chọn và đặt những mẫu bánh phù hợp cho mọi dịp như sinh nhật, lễ kỷ niệm, sự kiện, hoặc đơn giản chỉ là thưởng thức hằng ngày.</h4>
    <h5>Dự án của chúng tôi được xây dựng với mục tiêu tạo ra một nền tảng giúp khách hàng dễ dàng tìm kiếm, lựa chọn và đặt những mẫu bánh phù hợp cho mọi dịp như sinh nhật, lễ kỷ niệm, sự kiện, hoặc đơn giản chỉ là thưởng thức hằng ngày.</h5>
    <h2 class="mt-4">Thành viên nhóm</h2>
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
                'name' => 'Nguyễn Thành Trung',
                'role' => 'Lập trình viên Back-end',
                'email'=> 'nguyenthanhtrung@example.com',
                'bio'  => 'Phát triển API và xử lý cơ sở dữ liệu.',
                'img'  => '/assets/images/thi-b.jpg'
            ],
            [
                'name' => 'Nguyễn Văn Trung',
                'role' => 'Front-end Developer',
                'bio'  => 'Thiết kế giao diện và trải nghiệm người dùng.',
                'img'  => '/assets/images/van-c.jpg',
                'email'=> 'nguyenvantrung@example.com'
            ],
            [
                'name' => 'Phí Quốc Cường',
                'role' => 'Front-end Developer',
                'bio'  => 'Thiết kế giao diện và trải nghiệm người dùng.',
                'img'  => 'ac.jpg',
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

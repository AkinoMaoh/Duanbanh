<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<?php include_once("layouts/header.php"); ?>


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="height: 100px;" data-setbg="./views/contact1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Số điện thoại</h4>
                        <p>0962092321</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Địa chỉ</h4>
                        <p>FPT Polytechnic Hải Phòng</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Thời gian mở cửa</h4>
                        <p>24/7</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>phiquoccuon@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.579092175901!2d106.702118875221!3d20.827356486132476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a71332da37361%3A0xd6afea84192be374!2sPh%C3%B2ng%20tuy%E1%BB%83n%20sinh%20Tr%C6%B0%E1%BB%9Dng%20Cao%20%C4%90%E1%BA%B3ng%20FPT%20Polytechnic!5e0!3m2!1svi!2s!4v1702200000000"
            width="100%" height="500" style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Hải Phòng</h4>
                <ul>
                    <li>Phone: 0962092321</li>
                    <li>Add: FPT Polytechnic Hải Phòng</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->
   
    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>liên hệ</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Tên của bạn">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Email của bạn">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Tin nhắn của bạn"></textarea>
                        <button type="submit" class="site-btn">GỬI TIN NHẮN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
<?php include_once("layouts/footer.php"); ?>

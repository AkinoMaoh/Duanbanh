<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ogani | Template</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="views/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="views/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="views/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="views/css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="views/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="views/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="views/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="views/css/style.css" type="text/css" />
  </head>

  <body>
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
      <div class="humberger__menu__logo">
        <a href="#"><img src="views/img/logo.jpg" alt="" /></a>
      </div>
      <div class="humberger__menu__cart">
        <ul>
          <li>
            <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
          </li>
        </ul>
        <div class="header__cart__price"><span></span></div>
      </div>
      <div class="humberger__menu__widget">
        <div class="header__top__right__language">
          <img src="views/img/language.png" alt="" />
          <div>English</div>
          <span class="arrow_carrot-down"></span>
          <ul>
            <li><a href="#">VietNam</a></li>
            <li><a href="#">English</a></li>
          </ul>
        </div>
        <div class="header__top__right__auth">
          <a href="#"><i class="fa fa-user"></i> Đăng nhập</a>
        </div>
      </div>
      <nav class="humberger__menu__nav mobile-menu">
        <ul>
          <li class="<?= (isset($_GET['action']) && $_GET['action']=='home') ? 'active' : '' ?>">
            <a href="index.php?action=home">Trang chủ</a>
          </li>
          <li class="<?= (isset($_GET['action']) && $_GET['action']=='shop') ? 'active' : '' ?>">
            <a href="index.php?action=shop">Shop</a>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul class="header__menu__dropdown">
              <li><a href="index.php?action=top10new">Top 10 sản phẩm mới nhất</a></li>
              <li><a href="index.php?action=cart">Giỏ hàng</a></li>
              <li><a href="index.php?action=showcheckout">Thanh toán</a></li>
            </ul>
          </li>
          <li class="<?= (isset($_GET['action']) && $_GET['action']=='aboutUs') ? 'active' : '' ?>">
            <a href="index.php?action=aboutUs">About us</a>
          </li>
          <li class="<?= (isset($_GET['action']) && $_GET['action']=='contact') ? 'active' : '' ?>">
            <a href="index.php?action=contact">Liên hệ</a>
          </li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
      <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
      </div>
      <div class="humberger__menu__contact">
        <ul>
          <li><i class="fa fa-envelope"></i> bakery@gmail.com</li>
          <li>Miến phí ship cho tất cả đơn từ 1 triệu đồng</li>
        </ul>
      </div>
    </div>

    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="header__top__left">
                <ul>
                  <li><i class="fa fa-envelope"></i> bakery@gmail.com</li>
                  <li>Miến phí ship cho tất cả đơn từ 1 triệu đồng</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="header__top__right">
                <div class="header__top__right__social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p"></i></a>
                </div>
                <div class="header__top__right__language">
                  <img src="views/img/language.png" alt="" />
                  <div>English</div>
                  <span class="arrow_carrot-down"></span>
                  <ul>
                    <li><a href="#">VietNam</a></li>
                    <li><a href="#">English</a></li>
                  </ul>
                </div>
                <div class="header__top__right__auth">
                  <a href="http://localhost/duanbanh/admin/"><i class="fa fa-user"></i> Đăng nhập</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="header__logo">
              <a href="http://localhost/duanbanh/index.php?action=home"><img src="views/img/logo.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="header__menu">
              <ul>
                <li class="<?= (isset($_GET['action']) && $_GET['action']=='home') ? 'active' : '' ?>">
                  <a href="index.php?action=home">Trang chủ</a>
                </li>
                <li class="<?= (isset($_GET['action']) && $_GET['action']=='shop') ? 'active' : '' ?>">
                  <a href="index.php?action=shop">Shop</a>
                </li>
                <li class="<?= in_array($_GET['action'] ?? '', ['top10new','cart','showcheckout']) ? 'active' : '' ?>">
                  <a href="#">Pages</a>
                  <ul class="header__menu__dropdown">
                      <li><a href="index.php?action=top10new">Top 10 sản phẩm mới nhất</a></li>
                      <li><a href="index.php?action=cart">Giỏ hàng</a></li>
                      <li><a href="index.php?action=showcheckout">Thanh toán</a></li>
                  </ul>
              </li>
                <li class="<?= (isset($_GET['action']) && $_GET['action']=='aboutUs') ? 'active' : '' ?>">
                  <a href="index.php?action=aboutUs">About us</a>
                </li>
                <li class="<?= (isset($_GET['action']) && $_GET['action']=='contact') ? 'active' : '' ?>">
                  <a href="index.php?action=contact">Liên hệ</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3">
            <div class="header__cart header__menu">
              <ul>
                <li>
                  <a href="#"><i class="fa fa-heart"></i></a>
                </li>
                <li>
                  <a href="index.php?action=cart"><i class="fa fa-shopping-bag"></i></a>
                </li>
                <li class="history-menu">
                    <a href="#"><i class="fa fa-history"></i></a>
                    <ul class="header__menu__dropdown" style="width: 250px; padding: 10px;">
                        <form action="index.php" method="get">
                            <input type="hidden" name="action" value="HistoryCheckout">
                            <input type="text" name="phoneNumber" placeholder="Nhập số điện thoại" class="form-control">
                            <button type="submit" class="site-btn" style="margin-top: 5px; width: 100%;">Tra cứu</button>
                        </form>
                    </ul>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="humberger__open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>

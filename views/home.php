
<?php include_once('layouts/header.php'); ?>
    <!-- Hero Section Begin -->
    <section class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="hero__categories">
              <div class="hero__categories__all">
                <i class="fa fa-bars"></i>
                <span>Danh mục sản phẩm</span>
              </div>
              <ul>
                <?php foreach($productsDanhMuc as $item){ ?>
                <li><a href="#"><?= $item['name']; ?></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="hero__search">
              <div class="hero__search__form">
                <form action="#">
                  
                  <input type="text" placeholder="Nhập sản phẩm cần tìm" />
                  <button type="submit" class="site-btn">Tìm kiếm</button>
                </form>
              </div>
              <div class="hero__search__phone">
                <div class="hero__search__phone__icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="hero__search__phone__text">
                  <h5>0797949999</h5>
                  <span>Hỗ trợ 24/7</span>
                </div>
              </div>
            </div>
            <div class="hero__item set-bg" data-setbg="views/img/hero/banner.jpg">
              <div class="hero__text">
                <span>BÁNH NGON</span>
                <h2>NGUYÊN LIỆU <br />100% SẠCH</h2>
                <p>Có dịch vụ giao hàng miễn phí</p>
                <a href="#" class="primary-btn">MUA NGAY</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
      <div class="container">
        <div class="row">
          <div class="categories__slider owl-carousel">
            <?php foreach($products as $item){?>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="admin/<?php echo isset($item['img']) ? $item['img'] : 'default.png'; ?>"
              >
                <h5><a href="#"><?php echo $item['name'] ?></a></h5>
              </div>
            </div>
              <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>CÁC SẢN PHẨM CHÍNH</h2>
            </div>
           
          </div>
        </div>
        <div class="row featured__filter">
          
     <?php foreach($products as $item) { ?>
          <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
            <div class="featured__item">
              <div
                class="featured__item__pic set-bg"
                data-setbg="admin/<?php echo isset($item['img']) ? $item['img'] : 'default.png'; ?>">
              
            
                <ul class="featured__item__pic__hover">
                  <li>
                    <a href="index.php?action=sanpham&&id=<?= $item['id'] ?>"><i class="fa fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-retweet"></i></a>
                  </li>
                  <li>
                    <a href="index.php?action=addtocart&idsp=<?= $item['id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
              </div>
              <div class="featured__item__text">
                <h6><a href="#"><?php echo $item['name'];?></a></h6>
                <h5><?php echo $item['price'];?>VND</h5>
              </div>
            </div>
          </div>
<?php } ?>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="views/img/banner/banner-1.jpg" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="views/img/banner/banner-2.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <div class="latest-product__text">
              <h4>Sản phẩm mới nhất của chúng tôi</h4>
              <div class="latest-product__slider owl-carousel">
                <?php foreach($productsNew as $item) { ?>
                <div class="latest-prdouct__slider__item">
                  <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="admin/<?php echo isset($item['img']) ? $item['img'] : 'default.png'; ?>" alt="" />
                    </div>
                    <div class="latest-product__item__text">
                      <h6><?php echo $item['name'];?></h6>
                      <span><?php echo $item['price'];?> VNĐ</span>
                    </div>
                  </a>
                </div>
               <?php } ?>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->

  </body>
</html>
<?php include_once('layouts/footer.php'); ?>
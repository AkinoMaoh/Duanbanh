<?php include_once('layouts/header.php'); ?>
<div class="hero__item set-bg mb-5" data-setbg="views/img/hero/banner.jpg">
              <div class="hero__text">
                <span>FRUIT FRESH</span>
                <h2>Vegetable <br />100% Organic</h2>
                <p>Free Pickup and Delivery Available</p>
                <a href="#" class="primary-btn">SHOP NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories mt-5">
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
              <h2>Featured Product</h2>
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
<?php include_once('layouts/footer.php'); ?>
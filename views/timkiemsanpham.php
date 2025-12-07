<?php include_once('layouts/header.php'); ?>
<section class="hero">


    <!-- Featured Section Begin -->
    <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Kết quả tìm kiếm cho: "<?= htmlspecialchars($keyword) ?>"</h2>
            </div>
           
          </div>
        </div>
        <div class="row featured__filter">


    <?php if (empty($listProduct)): ?>

        <h2>Không tìm thấy sản phẩm nào.</h2>

    <?php else: ?>
             <?php foreach($listProduct as $item) { ?>
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
    <?php endif; ?>
        </div>
      </div>
    </section>
    <!-- Featured Section End -->
<?php include_once('layouts/footer.php'); ?>
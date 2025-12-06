<?php include_once('layouts/header.php'); ?>
<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="views/img/unnamed.jpg">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php?action=home">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
           
            <div class="row">
                <div class="col-lg-3 col-md-5">
                  
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục sản phẩm</span>
                         </div>
                        <ul>
                             <?php foreach($productsDanhMuc as $item){ ?>
                            <li><a href="index.php?action=danhmuc&iddm=<?= $item['id'] ?>"><?= $item['name']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                
            
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                    <div class="section-title product__discount__title">
                         <h2>Top 10 sản phẩm mới nhất</h2>
                    </div>

                <div class="product__discount__slider owl-carousel">
                <?php foreach($top10New as $item){ ?>
                <div class="product__discount__item">
                <div class="product__discount__item__pic set-bg"
                    data-setbg="admin/<?php echo isset($item['img']) ? $item['img'] : 'default.png'; ?>">
                    <ul class="product__item__pic__hover">
                        <li><a href="index.php?action=sanpham&&id=<?= $item['id'] ?>"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="index.php?action=addtocart&idsp=<?= $item['id']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product__discount__item__text">
                    <h5><a href="#"><?= $item['name']; ?></a></h5>
                    <div class="product__item__price"><?= $item['price']; ?></div>
                </div>
            </div>
            <?php } ?>
            </div>
            </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
<?php include_once('layouts/footer.php'); ?>
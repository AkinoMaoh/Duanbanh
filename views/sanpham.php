<?php include_once('layouts/header.php'); ?>
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <?php foreach ($product1 as $item) { ?>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="admin/<?php echo isset($item['img']) ? $item['img'] : 'default.png'; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?= $item['name'] ?></h3>

                        <div class="product__details__price"><?= number_format($item['price']) ?> VNĐ</div>
                        <p><?= $item['mota'] ?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="index.php?action=addtocart&&idsp=<?= $item['id'] ?>" class="primary-btn">Chuyển đến giỏ hàng</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include_once('layouts/footer.php'); ?>
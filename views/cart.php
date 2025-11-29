<?php include_once('layouts/header.php'); ?>

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION['cart'] as $key => $item) { ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="admin/<?= $item['img']; ?>" alt="">
                                       
                                    </td>
                                    <td> <h5><?= $item['name'] ?></h5></td>
                                    <td class="shoping__cart__price">
                                      <?php echo $item['price']; ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="<?= $item['soLuong']; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        <?= number_format($item['price'] * $item['soLuong']) ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                              <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Giỏ hàng</h5>
                        <ul>
                            <li>Tổng tiền <span><?= number_format($tongTien) ?></span></li>
                        </ul>
                        <a href="index.php?action=showcheckout" class="primary-btn">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
     <?php include_once('layouts/footer.php'); ?>
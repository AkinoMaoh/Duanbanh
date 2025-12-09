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
                                    <th class="shoping__product col-3">Ảnh</th>
                                    <th class="col-2">Tên sản phẩm</th>
                                    <th class="col-2">Giá</th>
                                    <th class="col-2">Số lượng</th>
                                    <th class="col-2">Thành tiền</th>
                                    <th class="col-1">Hành động</th>
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
                                      <span><?= number_format($item['price']); ?> VNĐ</span>
                                    </td>
                                 <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                           
                                           <input  type="text" value="<?= $item['soLuong']; ?>" readonly>
                                           
                                            </div>
                                        </div>
                                        </td>
                                    <td class="shoping__cart__total">
                                       <span><?= number_format($item['price'] * $item['soLuong']) ?> VNĐ</span> 
                                    </td>
                                    
                                    <td class="shoping__cart__item__close">
                                        <a href="index.php?action=deletecart&idsp=<?= $item['idsp']; ?>" 
                                        onclick="return confirm('Bạn có muốn xoá không?')"
                                       class="xoaSP"
                                        >
                                            Xoá
                                        </a>
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
                        <a href="index.php?action=home" class="primary-btn cart-btn">Tiếp tục mua sắm</a>
                       
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
                            <li>Tổng tiền <span><?= number_format($tongTien) ?> VNĐ</span></li>
                        </ul>
                        <a href="index.php?action=showcheckout" class="primary-btn">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
     <?php include_once('layouts/footer.php'); ?>
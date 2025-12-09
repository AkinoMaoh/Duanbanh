<?php include_once('layouts/header.php');?>
  <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
           
            <div class="checkout__form">
                <h4>Thông tin thanh toán</h4>
                <form action="index.php?action=checkout" method="POST">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Họ tên<span>*</span></p>
                                        <input type="text" name="ten" required>
                                    </div>
                                </div>
                               
                            </div>
                            
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" name="diachi" placeholder="Street Address" class="checkout__input__add" required>
                                
                            </div>
                         
                        
        
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Điện thoại<span>*</span></p>
                                        <input type="text" name="dienthoai" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" required>
                                    </div>
                                </div>
                            </div>
                            
                           </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="checkout__order">
                              
                                <h4>Mặt hàng của bạn</h4>
                                  <!-- <form action="index.php?action=thanhtoan" method="POST"> -->
                                     <div class="checkout__order__products">
                                        <span class="col-3 text-center">Sản phẩm </span>
                                         <span class="col-3 text-center">Số lượng</span>
                                         <span class="col-2 text-center">Giá</span>
                                         <span class="col-2 text-center">Tổng</span>
                                        </div>
                                <?php foreach($_SESSION['cart'] as $item) { ?>
                                <ul>
                                    <li>
                                        <span class="col-3 text-center"><?= $item['name']; ?></span>
                                        <span class="col-3 text-center"><?= $item['soLuong']; ?></span>
                                        <span class="col-3 text-center"><?php echo $item['price']; ?></span>
                                        <span class="col-2 text-center"><?= number_format($item['price'] * $item['soLuong']) ?></span>
                                    </li>
                                   
                                </ul>
                                <?php } ?>
                                <div class="checkout__order__total">Tổng tiền <span><?= number_format($tongTien) ?></span></div>
                               
                               
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Chuyển khoản
                                        <input type="checkbox" id="payment" name="chuyenkhoan"> 
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                               
                                <button type="submit" class="site-btn">
                                    <?php if ($tongTien == 0) {
                                       echo 'Bạn không có sản phẩm nào để thanh toán';
                                    }else{
                                        echo 'Thanh toán';
                                    }
                                     ?>
                                </button>
                            </div>
                              
                                  <!-- </form>  -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

<?php include_once('layouts/footer.php');?>

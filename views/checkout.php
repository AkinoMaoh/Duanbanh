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
                                        <input required type="text" name="ten">
                                    </div>
                                </div>
                               
                            </div>
                            
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" required name="diachi" placeholder="Street Address" class="checkout__input__add">
                                
                            </div>
                         
                        
        
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Điện thoại<span>*</span></p>
                                        <input type="text" required name="dienthoai">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" required name="email">
                                    </div>
                                </div>
                            </div>
                            
                           </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="checkout__order">
                              
                                <h4>Mặt hàng của bạn</h4>
                                  <!-- <form action="index.php?action=thanhtoan" method="POST"> -->
                                     <div class="checkout__order__products">Sản phẩm <span>Số lượng</span><span>Giá</span><span>Tổng</span></div>
                                <?php foreach($_SESSION['cart'] as $item) { ?>
                                <ul>
                                    <li><?= $item['name']; ?><span><?= $item['soLuong']; ?></span><span><?php echo $item['price']; ?></span><span><?= number_format($item['price'] * $item['soLuong']) ?></span></li>
                                   
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
                               
                                <button type="submit" class="site-btn">Thanh toán</button>
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

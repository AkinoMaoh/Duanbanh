<?php include_once('layouts/header.php'); ?>
<section class="checkout spad">
    <div class="container">

        <!-- Nếu giỏ hàng trống -->
        <?php if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) { ?>
            
            <div class="alert alert-warning" style="padding: 20px; font-size: 18px; text-align:center;">
                Giỏ hàng của bạn đang trống!
            </div>

        <?php } else { ?>

        <div class="checkout__form">
            <h4>Thông tin thanh toán</h4>
            <form action="index.php?action=checkout&act=add1" method="POST">
                <div class="row">

                    <!-- Cột nhập thông tin -->
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

                    <!-- Cột đơn hàng -->
                    <div class="col-lg-7 col-md-6">
                        <div class="checkout__order">
                            <h4>Mặt hàng của bạn</h4>

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
                                        <span class="col-3 text-center"><?= $item['price']; ?></span>
                                        <span class="col-2 text-center"><?= number_format($item['price'] * $item['soLuong']) ?></span>
                                    </li>
                                </ul>
                            <?php } ?>

                            <div class="checkout__order__total">
                                Tổng tiền <span><?= number_format($tongTien) ?></span>
                            </div>

                            <!-- Chuyển khoản -->
                            <div class="checkout__input__checkbox">
                                <label for="payment1">
                                    Chuyển khoản
                                    <input type="radio" id="payment1" name="pttt" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <!-- Thanh toán khi nhận hàng (mặc định) -->
                            <div class="checkout__input__checkbox">
                                <label for="payment0">
                                    Thanh toán khi nhận hàng (COD)
                                    <input type="radio" id="payment0" name="pttt" value="0" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <!-- QR chuyển khoản -->
                            <div id="qr_code_box" style="margin-top: 15px; display: none;">
                                <img src="https://img.vietqr.io/image/MB-20072006190326-compact2.png?amount=<?= $tongTien ?>&addInfo=Thanh%20toan%20don%20hang"
                                     style="width:260px;border:1px solid #ddd;padding:10px;border-radius:10px;">
                            </div>

                            <!-- Nút thanh toán -->
                            <button type="submit" class="site-btn" id="submitBtn">
                                Đặt hàng
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <?php } ?>

    </div>
</section>

<!-- JS xử lý giao diện -->
<script>
let chonChuyenKhoan = document.getElementById("payment1");
let chonCod = document.getElementById("payment0");
let hopMaQR = document.getElementById("qr_code_box");
let nutThanhToan = document.getElementById("submitBtn");

if (nutThanhToan) {

    function capNhatGiaoDienThanhToan() {
        if (chonChuyenKhoan.checked) {
            hopMaQR.style.display = "block";
            nutThanhToan.textContent = "Xác nhận đã chuyển khoản và đặt hàng";
        } else {
            hopMaQR.style.display = "none";
            nutThanhToan.textContent = "Đặt hàng";
        }
    }

    chonChuyenKhoan.addEventListener("change", capNhatGiaoDienThanhToan);
    chonCod.addEventListener("change", capNhatGiaoDienThanhToan);

    nutThanhToan.addEventListener("click", function() {

        // COD → alert đặt hàng thành công
        if (chonCod.checked) {
            alert("Bạn đã đặt hàng thành công!");
        }

        // Chuyển khoản → alert xác thực
        if (chonChuyenKhoan.checked) {
            alert("Đang xác thực thanh toán...");
        }
    });

    // Khi load vào → COD được chọn
    capNhatGiaoDienThanhToan();
}
</script>

<?php include_once('layouts/footer.php'); ?>

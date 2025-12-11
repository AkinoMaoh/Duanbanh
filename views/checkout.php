<?php include_once('layouts/header.php'); ?>

<style>
    .thong-bao-loi {
        color: red;
        font-size: 0.85em;
        display: none;
        margin-top: 5px;
    }
    .vien-do-loi {
        border: 1px solid red !important;
    }
    button:disabled {
        background-color: #ccc !important;
        cursor: not-allowed;
        pointer-events: none;
    }
</style>

<section class="checkout spad">
    <div class="container">

        <?php if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) { ?>
            
            <div class="alert alert-warning" style="padding: 20px; font-size: 18px; text-align:center;">
                Giỏ hàng của bạn đang trống!
            </div>

        <?php } else { ?>

        <div class="checkout__form">
            <h4>Thông tin thanh toán</h4>
            <form action="index.php?action=checkout&act=add1" method="POST" id="formThanhToan">
                <div class="row">

                    <div class="col-lg-5 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Họ tên<span>*</span></p>
                                    <input type="text" name="ten" id="nhap_ten" required>
                                    <small class="thong-bao-loi" id="loi_ten">Vui lòng nhập họ tên</small>
                                </div>
                            </div>
                        </div>

                        <div class="checkout__input">
                            <p>Địa chỉ<span>*</span></p>
                            <input type="text" name="diachi" id="nhap_diachi" placeholder="Street Address" class="checkout__input__add" required>
                            <small class="thong-bao-loi" id="loi_diachi">Vui lòng nhập địa chỉ</small>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Điện thoại<span>*</span></p>
                                    <input type="text" name="dienthoai" id="nhap_dienthoai" required>
                                    <small class="thong-bao-loi" id="loi_dienthoai">SĐT không hợp lệ (Phải là 10 số VN)</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" name="email" id="nhap_email" required>
                                    <small class="thong-bao-loi" id="loi_email">Email phải là @gmail.com</small>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="checkout__order">
                            <h4>Mặt hàng của bạn</h4>

                            <div class="checkout__order__products">
                                <span class="col-3 text-center">Sản phẩm </span>
                                <span class="col-3 text-center">Số lượng</span>
                                <span class="col-2 text-center">Giá</span>
                                <span class="col-2 text-center">Tổng</span>
                            </div>

                            <?php foreach($_SESSION['cart'] as $sanPham) { ?>
                                <ul>
                                    <li>
                                        <span class="col-3 text-center"><?= $sanPham['name']; ?></span>
                                        <span class="col-3 text-center"><?= $sanPham['soLuong']; ?></span>
                                        <span class="col-3 text-center"><?= $sanPham['price']; ?></span>
                                        <span class="col-2 text-center"><?= number_format($sanPham['price'] * $sanPham['soLuong']) ?></span>
                                    </li>
                                </ul>
                            <?php } ?>

                            <div class="checkout__order__total">
                                Tổng tiền <span><?= number_format($tongTien) ?></span>
                            </div>

                            <div class="checkout__input__checkbox">
                                <label for="payment1">
                                    Chuyển khoản
                                    <input type="radio" id="payment1" name="pttt" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="checkout__input__checkbox">
                                <label for="payment0">
                                    Thanh toán khi nhận hàng (COD)
                                    <input type="radio" id="payment0" name="pttt" value="0" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div id="khung_ma_qr" style="margin-top: 15px; display: none;">
                                <img src="https://img.vietqr.io/image/MB-20072006190326-compact2.png?amount=<?= $tongTien ?>&addInfo=Thanh%20toan%20don%20hang"
                                     style="width:260px;border:1px solid #ddd;padding:10px;border-radius:10px;">
                            </div>

                            <button type="submit" class="site-btn" id="nutDatHang" disabled>
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    
    const oNhapTen = document.getElementById('nhap_ten');
    const oNhapDiaChi = document.getElementById('nhap_diachi');
    const oNhapSDT = document.getElementById('nhap_dienthoai');
    const oNhapEmail = document.getElementById('nhap_email');
    const nutDatHang = document.getElementById('nutDatHang');

    const radioChuyenKhoan = document.getElementById("payment1");
    const radioCOD = document.getElementById("payment0");
    const khoiQR = document.getElementById("khung_ma_qr");

    const dinhDangSDT = /^(0)(3|5|7|8|9)[0-9]{8}$/; 
    const dinhDangGmail = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

    function capNhatGiaoDien() {
        if (!nutDatHang) return;

        if (radioChuyenKhoan.checked) {
            khoiQR.style.display = "block";
            if(!nutDatHang.disabled) { 
                nutDatHang.textContent = "Xác nhận đã chuyển khoản và đặt hàng";
            }
        } else {
            khoiQR.style.display = "none";
            if(!nutDatHang.disabled) {
                nutDatHang.textContent = "Đặt hàng";
            }
        }
    }

    function kiemTraDuLieu() {
        if (!nutDatHang) return; 

        let hopLe = true;

        if (oNhapTen.value.trim() === "") {
            hienThiLoi(oNhapTen, 'loi_ten', true);
            hopLe = false;
        } else {
            hienThiLoi(oNhapTen, 'loi_ten', false);
        }

        if (oNhapDiaChi.value.trim() === "") {
            hienThiLoi(oNhapDiaChi, 'loi_diachi', true);
            hopLe = false;
        } else {
            hienThiLoi(oNhapDiaChi, 'loi_diachi', false);
        }

        if (!dinhDangSDT.test(oNhapSDT.value.trim())) {
            hienThiLoi(oNhapSDT, 'loi_dienthoai', true);
            hopLe = false;
        } else {
            hienThiLoi(oNhapSDT, 'loi_dienthoai', false);
        }

        if (!dinhDangGmail.test(oNhapEmail.value.trim())) {
            hienThiLoi(oNhapEmail, 'loi_email', true);
            hopLe = false;
        } else {
            hienThiLoi(oNhapEmail, 'loi_email', false);
        }

        nutDatHang.disabled = !hopLe;
        
        if(hopLe) {
            capNhatGiaoDien();
        } else {
            nutDatHang.textContent = "Vui lòng điền đủ thông tin";
        }
    }

    function hienThiLoi(doiTuongInput, idLoi, coLoi) {
        const theLoi = document.getElementById(idLoi);
        if (coLoi) {
            theLoi.style.display = 'block';
            doiTuongInput.classList.add('vien-do-loi');
        } else {
            theLoi.style.display = 'none';
            doiTuongInput.classList.remove('vien-do-loi');
        }
    }

    if (nutDatHang) {
        oNhapTen.addEventListener('input', kiemTraDuLieu);
        oNhapDiaChi.addEventListener('input', kiemTraDuLieu);
        oNhapSDT.addEventListener('input', kiemTraDuLieu);
        oNhapEmail.addEventListener('input', kiemTraDuLieu);

        radioChuyenKhoan.addEventListener("change", capNhatGiaoDien);
        radioCOD.addEventListener("change", capNhatGiaoDien);

        nutDatHang.addEventListener("click", function(e) {
            if(nutDatHang.disabled) {
                e.preventDefault();
                return;
            }

            if (radioCOD.checked) {
                alert("Bạn đã đặt hàng thành công!");
            }
            if (radioChuyenKhoan.checked) {
                alert("Đang xác thực thanh toán...");
            }
        });

        kiemTraDuLieu(); 
        capNhatGiaoDien();
    }
});
</script>

<?php include_once('layouts/footer.php'); ?>

<?php include_once("layouts/header.php"); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto p-4 shadow rounded bg-white">

            <h1 class="mb-4 text-center" style="color:#d2691e;">Liên Hệ Với Chúng Tôi</h1>

            <form method="POST" action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Họ Tên</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                
                <div class="mb-3">
                    <label for="phone" class="form-label">Số Điện Thoại</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                
                <div class="mb-3">
                    <label for="subject" class="form-label">Chủ Đề</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                
                <div class="mb-3">
                    <label for="message" class="form-label">Tin Nhắn</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn" 
                            style="background:#d2691e; color:white; padding:10px 30px; font-weight:600;">
                        Gửi
                    </button>
                </div>
            </form>

            <hr class="my-5">

            <div class="mt-4">
                <h4 class="mb-3" style="color:#d2691e;">Thông Tin Liên Hệ</h4>

                <p><strong> Địa Chỉ:</strong> Hải Phòng </p>
                <p><strong> Email:</strong>phiquoccuong2803@gmail.com</p>
                <p><strong> Số Điện Thoại:</strong> 0962092321 </p>
            </div>

        </div>
    </div>
</div>

<?php include_once("layouts/footer.php"); ?>

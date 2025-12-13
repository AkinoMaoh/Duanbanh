<style>
    .team-container {
    display: flex;
    justify-content: center;
    align-items: stretch;
    gap: 20px;
    flex-wrap: nowrap;
    margin-top: 30px;
}

.team-container .card {
    width: 18rem;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.team-container .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 6px 18px rgba(0,0,0,0.15);
}

.team-container img {
    height: 200px;
    object-fit: cover;
    
}

</style>
<?php include_once("layouts/header.php"); ?>

<!-- About Section Begin -->
<section class="about spad" style="margin-top: -80px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__text">
                    <h1>Giới thiệu về cửa hàng bánh</h1>
                    <p>
                        Chúng tôi tự hào mang đến những chiếc bánh kem tươi ngon, 
                        được làm từ nguyên liệu chất lượng cao, đảm bảo an toàn và hương vị tuyệt hảo.
                        Với hơn 5 năm kinh nghiệm, cửa hàng đã phục vụ hàng nghìn khách hàng và đồng hành trong những khoảnh khắc đặc biệt.
                    </p>
                    <p>
                        Từ bánh sinh nhật, bánh cưới đến bánh sự kiện – tất cả đều được trang trí thủ công tỉ mỉ, 
                        mang phong cách riêng biệt.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about__pic">
                    <img src="./views/aboutUs.jpg" alt="" style="width: 100%; border-radius:10px;">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Section End -->


<!-- Team Section Begin -->
<section class="team spad" style="margin-top: -150px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Đội ngũ của chúng tôi</h2>
                </div>
            </div>
        </div>

        <div class="row team-container">
            <div class="card" style="width: 18rem;" >
                <img src="views/anhThanhVien/dqa.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title">Dương Quốc Anh</h5>
                    <p class="card-text">Quản lý dự án</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;" >
                <img src="./views/anhThanhVien/avt29_11_2025.png" class="card-img-top" alt="...">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title">Đặng Thành Trung</h5>
                    <p class="card-text">Lập trình viên Back-end</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;" >
                <img src="./views/team3.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title">Nguyễn Văn Trung</h5>
                    <p class="card-text">Front-end Developer</p>
                </div>
            </div>  
            <div class="card" style="width: 18rem;">
                <img src="./views/anhThanhVien/cuong.jpg" alt="" class="card-img-top" >
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title">Phí Quốc Cường</h5>
                    <p class="card-text">Thiết kế giao diện người dùng</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;" >
                <img src="./views/team3.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title">Văn Mạnh</h5>
                    <p class="card-text">Front-end Developer</p>
                </div>
            </div>
        </div>


    </div>
</section>
<?php include_once("layouts/footer.php"); ?>

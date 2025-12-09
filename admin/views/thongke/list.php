<?php
include_once("views/layouts/header.php");
?>
<body>


            <div class="page-heading">
                <h3>Trang thống kê</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="bi bi-bar-chart"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Thống kê theo tuần</h6>
                                                <h6 class="font-extrabold mb-0">112.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="fas fa-chart-line"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Thống kê theo tháng</h6>
                                                <h6 class="font-extrabold mb-0">183.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                            
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="bi bi-pie-chart"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Thống kê theo năm</h6>
                                                <h6 class="font-extrabold mb-0">80.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="fas fa-chart-pie"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Tổng sản phẩm đã bán</h6>
                                                <h6 class="font-extrabold mb-0"><?= number_format($tongDaBan) ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                 <h3>Top 10 sản phẩm bán chạy nhất</h3>
                                <a href="index.php?action=thongke10spbanchaynhat" class="btn btn-primary">Chi tiết</a>
                                <table class="table table-striped" id="">
                                 <thead>
                                 <tr>
                                    <th class="col-1">Id</th>
                                    
                                    <th class="col-2">Tên sản phẩm</th>
                                    <th class="col-1">Giá sp</th>
                                    <th class="col-1">Ảnh</th>
                                    <th class="col-3">Mô tả</th>
                            
                                    
                                    </tr>
                                    </thead>
                                 <tbody>
                                        <?php foreach ($productsBanChay as $item) { ?>
                                     <tr>
                                <td><?= $item['id'] ?></td>
                               
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['price'] ?> VND</td>
                                <td><img width="100px" src="./<?= $item['img'] ?>" alt=""></td>
                                <td><?= $item['mota'] ?></td>
                               
                              
                                     </tr>
                                 <?php } ?>
                                </tbody>
                                </table>
                            </div>
                         
                                
                            
                            <div class="col-6">
                                <h3>Top 10 sản phẩm mới nhất</h3>
                                <a href="index.php?action=thongke10spnew" class="btn btn-primary">Chi tiết</a>
                                 <table class="table table-striped" id="">
                             <thead>
                                <tr>
                                    <th class="col-1">Id</th>
                                    <th class="col-1">Danh mục</th>
                                    <th class="col-2">Tên sản phẩm</th>
                                    <th class="col-1">Giá sp</th>
                                    <th class="col-1">Ảnh</th>
                                    <th class="col-3">Mô tả</th>
                            
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($productsNew as $item) { ?>
                                        <tr>
                                            <td><?= $item['id'] ?></td>
                                            <td><?= $item['tendanhmuc'] ?></td>
                                            <td><?= $item['name'] ?></td>
                                            <td><?= $item['price'] ?> VND</td>
                                            <td><img width="100px" src="./<?= $item['img'] ?>" alt=""></td>
                                            <td><?= $item['mota'] ?></td>
                                        
                                        
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                          
                            <div class="col-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Comments</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="views/assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="views/assets/images/faces/2.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Wow amazing design! Can you make another
                                                                tutorial for
                                                                this design?</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                   
                        <div class="card">
                            <div class="card-header">
                                <h4>Các tài khoản</h4>
                            </div>
                            <div class="card-content pb-4">
                                <?php foreach($hienThiTK as $item){ ?>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="views/assets/images/faces/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1"><?= $item['user']; ?></h5>
                                        <h6 class="text-muted mb-0"><?= $item['email']; ?></h6>
                                    </div>
                                </div>
                           <?php } ?>
                                
                            </div>
                        </div>
                       
                    </div>
                </section>
            </div>

      
       
  
     

<?php
include_once("views/layouts/footer.php");
?>
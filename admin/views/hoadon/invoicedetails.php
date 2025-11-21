<?php
include_once("views/layouts/header.php");
?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Quản lý Hóa đơn</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hóa đơn</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                 <a href="?action=listhoadon" class="btn btn-primary"> Quay lại </a>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Sđt</th>
                            <th>Thời gian đặt</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>                    
                            <tr>
                                <td><?= $hoaDon['id'] ?></td>
                                <td><?= $hoaDon['tenkhachhang'] ?></td> 
                                <td><?= $hoaDon['diachi'] ?></td>
                                <td><?= $hoaDon['sdt'] ?></td>
                                <td><?= $hoaDon['ngaygiodat'] ?></td>
                                <td><?= $hoaDon['tongtien'] ?> VNĐ</td>
                                <td>                              
                                    <!-- Trạng thái = 0 => chưa thanh toán, trạng thái = 1 => đã thanh toán -->
                                    <?php if ($hoaDon['trangthai'] == 0) { ?>
                                        <a class="btn btn-warning">Chưa thanh toán</a>
                                    <?php } else { ?>
                                        <a class="btn btn-success">Đã Thanh toán</a>
                                    <?php } ?>
                                </td>   
                            </tr>                     
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
<?php
include_once("views/layouts/footer.php");
?>
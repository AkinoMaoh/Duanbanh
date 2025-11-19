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
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Sđt</th>
                            <th>Trạng thái</th>
                            <th>Chi tiết hóa đơn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allHoaDon as $item) { ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['tenkhachhang'] ?></td>
                                <td><?= $item['diachi'] ?></td>
                                <td><?= $item['sdt'] ?></td>
                            
                                <td>                              
                                    <?php if ($item['trangthai'] == 0) { ?>
                                        <a class="btn btn-warning">Chưa thanh toán</a>
                                    <?php } else { ?>
                                        <a class="btn btn-success">Đã Thanh toán</a>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="index.php?action=chitiethoadon&id=<?= $item['id'] ?>"
                                        class="btn btn-secondary">Chi tiết</a>                                   
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
<?php
include_once("views/layouts/footer.php");
?>
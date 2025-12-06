<?php include_once("views/layouts/header.php"); ?>

<div class="page-heading col-6 mx-auto">
    <div class="page-title">
        <div class="row">
            <div class="col-12">
                <h3>Chi tiết Hóa đơn #<?= $hoaDon['id'] ?></h3>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">

                <a href="?action=HistoryCheckout&phoneNumber=<?= $hoaDon['sdt'] ?>" 
                   class="btn btn-primary mb-3">
                    Quay lại
                </a>

                <h5>Thông tin đơn hàng</h5>
                <table class="table table-striped table-bordered mb-4">
                    <tr><th>Mã đơn</th><td>#<?= $hoaDon['id'] ?></td></tr>
                    <tr><th>Khách hàng</th><td><?= $hoaDon['tenkhachhang'] ?> - <?= $hoaDon['sdt'] ?></td></tr>
                    <tr><th>Địa chỉ</th><td><?= $hoaDon['diachi'] ?></td></tr>
                    <tr><th>Ngày đặt</th><td><?= $hoaDon['ngaygiodat'] ?></td></tr>
                    <tr>
                        <th>Trạng thái</th>
                        <td>
                            <?php 
                                $trangThai = [
                                    0 => 'Đơn hàng mới',
                                    1 => 'Đang xử lý',
                                    2 => 'Đang giao hàng',
                                    3 => 'Đã giao hàng',
                                    4 => 'Đã hủy'
                                ];                               
                                echo $trangThai[$hoaDon['trangthai']] ?? 'Chưa xác định';
                            ?>
                        </td>
                    </tr>
                </table>

                <h5>Danh sách sản phẩm</h5>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (empty($listChiTiet)): ?>
                            <tr>
                                <td colspan="6" class="text-center">Không có sản phẩm</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($listChiTiet as $i => $item): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= $item['ten_sp'] ?></td>
                                    <td><img src="admin/<?= $item['anh_sp'] ?>" width="50"></td>
                                    <td><?= number_format($item['gia']) ?> đ</td>
                                    <td><?= $item['soluong'] ?></td>
                                    <td><?= number_format($item['gia'] * $item['soluong']) ?> đ</td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>

                    <tfoot>
                        <tr class="btn btn-danger">
                            <td colspan="5" class="text-end fw-bold">Tổng tiền:</td>
                            <td class="fw-bold"><?= number_format($hoaDon['tongtien']) ?> đ</td>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </section>
</div>

<?php include_once("views/layouts/footer.php"); ?>

<?php include_once("views/layouts/header.php"); ?>

<div class="container" style="margin-top: 40px;">
    <h3>Lịch sử mua hàng</h3>
    <hr>

    <?php if (!isset($_GET['phoneNumber']) || $_GET['phoneNumber'] == ""): ?>

        <p class="text-muted">Vui lòng nhập số điện thoại để tra cứu.</p>

    <?php elseif (empty($listHistory)): ?>

        <p class="text-danger">Không tìm thấy hóa đơn nào.</p>

    <?php else: ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã đơn</th>
                    <th>Khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Tổng tiền</th>
                    <th>Xem chi tiết</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listHistory as $item): ?>
                <tr>
                    <td>#<?= $item['id'] ?></td>
                    <td><?= $item['tenkhachhang'] ?></td>
                    <td><?= $item['sdt'] ?></td>
                    <td><?= $item['diachi'] ?></td>
                    <td><?= number_format($item['tongtien']) ?> đ</td>
                    <td>
                        <a href="index.php?action=HistoryCheckoutDetail&id=<?= $item['id'] ?>" 
                           class="btn btn-primary btn-sm">
                            Chi tiết
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    <?php endif; ?>
</div>

<?php include_once("views/layouts/footer.php"); ?>

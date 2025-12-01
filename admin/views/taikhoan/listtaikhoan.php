<h2>Danh sách tài khoản</h2>
<a href="index.php?action=createtaikhoan" class="btn btn-success mb-3">Thêm tài khoản</a>
<table border="1" cellpadding="10" class="table table-striped">
<tr>
<th>ID</th>
<th>Tên</th>
<th>Email</th>
<th>Địa chỉ</th>
<th>User</th>
<th>Role</th>
<th>Hành động</th>
</tr>
<?php foreach($users as $u): ?>
<tr>
<td><?= $u['id'] ?></td>
<td><?= $u['name'] ?></td>
<td><?= $u['email'] ?></td>
<td><?= $u['address'] ?></td>
<td><?= $u['user'] ?></td>
<td><?= $u['role']==1?'Admin':'User' ?></td>
<td>
<a href="index.php?action=edittaikhoan&id=<?= $u['id'] ?>" class="btn btn-primary btn-sm">Sửa</a>
<a onclick="return confirm('Bạn có chắc muốn xóa?')" href="index.php?action=deletetaikhoan&id=<?= $u['id'] ?>" class="btn btn-danger btn-sm">Xóa</a>
</td>
</tr>
<?php endforeach; ?>
</table>

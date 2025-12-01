<h2>Sửa tài khoản</h2>
<form action="index.php?action=updatetaikhoan" method="POST">
<input type="hidden" name="id" value="<?= $user['id'] ?>">
<div class="mb-3">
    <label>Tên</label>
    <input type="text" name="name" value="<?= $user['name'] ?>" class="form-control" required>
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" required>
</div>
<div class="mb-3">
    <label>Địa chỉ</label>
    <input type="text" name="address" value="<?= $user['address'] ?>" class="form-control">
</div>
<div class="mb-3">
    <label>User</label>
    <input type="text" name="user" value="<?= $user['user'] ?>" class="form-control" required>
</div>
<div class="mb-3">
    <label>Role</label>
    <select name="role" class="form-control">
        <option value="0" <?= $user['role']==0?'selected':'' ?>>User</option>
        <option value="1" <?= $user['role']==1?'selected':'' ?>>Admin</option>
    </select>
</div>
<button type="submit" class="btn btn-primary">Cập nhật</button>
</form>

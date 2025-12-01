<h2>Thêm tài khoản</h2>
<form action="index.php?action=storetaikhoan" method="POST">
<div class="mb-3">
    <label>Tên</label>
    <input type="text" name="name" class="form-control" required>
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
</div>
<div class="mb-3">
    <label>Địa chỉ</label>
    <input type="text" name="address" class="form-control">
</div>
<div class="mb-3">
    <label>User</label>
    <input type="text" name="user" class="form-control" required>
</div>
<div class="mb-3">
    <label>Pass</label>
    <input type="text" name="pass" class="form-control" required>
</div>
<div class="mb-3">
    <label>Role</label>
    <select name="role" class="form-control">
        <option value="0">User</option>
        <option value="1">Admin</option>
    </select>
</div>
<button type="submit" class="btn btn-success">Lưu</button>
</form>

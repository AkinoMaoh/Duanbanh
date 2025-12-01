<?php
require_once __DIR__ . '/../Model/taikhoan.php';

class TaiKhoanController {

    public function index() {
        $users = taikhoan_all();
        include_once __DIR__ . '/../views/taikhoan/listtaikhoan.php';
    }

    public function create() {
        include_once __DIR__ . '/../views/taikhoan/createtaikhoan.php';
    }

    public function store() {
        taikhoan_insert($_POST['name'], $_POST['email'], $_POST['address'], $_POST['user'], $_POST['pass'], $_POST['role']);
        header("Location: index.php?action=listtaikhoan");
        exit;
    }

    public function edit() {
        $user = taikhoan_get_one($_GET['id']);
        include_once __DIR__ . '/../views/taikhoan/edittaikhoan.php';
    }

    public function update() {
        taikhoan_update($_POST['id'], $_POST['name'], $_POST['email'], $_POST['address'], $_POST['user'], $_POST['role']);
        header("Location: index.php?action=listtaikhoan");
        exit;
    }

    public function delete() {
        taikhoan_delete($_GET['id']);
        header("Location: index.php?action=listtaikhoan");
        exit;
    }
}

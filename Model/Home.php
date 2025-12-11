<?php 
include_once("pdo.php");

class Home {
    public function getAll() {
        $sql = "select * from sanpham where deleted = 0 limit 8";
        return pdo_query($sql);
    }
    public function getAllSp() {
        $sql = "select * from sanpham where deleted = 0 ";
        return pdo_query($sql);
    }
    public function getAllShop() {
        $sql = "select * from sanpham where deleted = 0 ";
        return pdo_query($sql);
    }
    public function getAllNew() {
        $sql = "select * from sanpham where deleted = 0 order by id desc limit 10";
        return pdo_query($sql);
    }
  public function getAllDanhMuc() {
        $sql = "select * from danhmuc where deleted = 0";
        return pdo_query($sql);
    }
     public function getOneSp($id) {
        $sql = "select * from sanpham where id = ?";
        return pdo_query($sql, $id);
    }
    public function getAllSpDanhMuc($iddm) {
        $sql = "SELECT * FROM sanpham WHERE iddm = ? AND deleted = 0";
        return pdo_query($sql, $iddm);
    }
}
?>
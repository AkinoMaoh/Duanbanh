<?php 
include_once("pdo.php");

class Home {
    public function getAll() {
        $sql = "select * from sanpham where deleted = 0";
        return pdo_query($sql);
    }
    public function getAllNew() {
        $sql = "select * from sanpham where deleted = 0 order by id desc limit 8";
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
}
?>
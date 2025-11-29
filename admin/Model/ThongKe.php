<?php 
include_once("pdo.php");

class ThongKe {
    public function getAll() {
        $sql = "select * from sanpham";
        return pdo_query($sql);
    }
}
?>
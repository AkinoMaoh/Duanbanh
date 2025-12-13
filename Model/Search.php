<?php
include_once("pdo.php");

class Search {

    public function searchProduct($keyword) {
        // Chỉ tìm sản phẩm chưa bị xóa
        $sql = "SELECT * FROM sanpham WHERE deleted = 0 AND name LIKE ?";
        return pdo_query($sql, "%".$keyword."%");
    }

}
?>
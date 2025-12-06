<?php
include_once("pdo.php");

class Search {

    public function searchProduct($keyword) {
        $sql = "SELECT * FROM sanpham WHERE name LIKE ?";
        return pdo_query($sql, "%".$keyword."%");
    }

}

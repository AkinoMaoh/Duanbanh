<?php 
include_once("pdo.php");

class ThongKe {
    public function getAll() {
        $sql = "select * from sanpham";
        return pdo_query($sql);
    }
    public function getAllNew() {
        $sql = "select * from sanpham where deleted = 0 order by id desc limit 10";
        return pdo_query($sql);
    }
   public function getAllBanChay() {
    $sql = "select sanpham.id, sanpham.name, sanpham.price, sanpham.img, sanpham.mota, COUNT(*) AS tongban from hoadon
            join sanpham on hoadon.idsp = sanpham.id group by sanpham.id, sanpham.name, sanpham.price 
            order by tongban desc limit 10;";
    return pdo_query($sql);
}

}
?>
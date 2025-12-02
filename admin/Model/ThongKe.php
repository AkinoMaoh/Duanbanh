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
    $sql ="SELECT 
    sanpham.id,
    sanpham.name,
    sanpham.price,
    sanpham.img,
    sanpham.mota,
    SUM(chitiethoadon.soluong) AS tong_mua
FROM chitiethoadon
JOIN sanpham ON chitiethoadon.id_sanpham = sanpham.id
GROUP BY sanpham.id, sanpham.name, sanpham.price, sanpham.img
ORDER BY tong_mua DESC
LIMIT 10;";
    return pdo_query($sql);
}

}
?>
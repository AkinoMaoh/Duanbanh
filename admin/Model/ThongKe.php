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
public function getTK(){
    $sql = "select user, email from taikhoan";
    return pdo_query($sql);
}
public function soLuongBan() {
    $sql = "SELECT SUM(soLuong) AS soLuongDaBan FROM chitiethoadon";
    return pdo_query_one($sql);   
}
public function doanhThu(){
    $sql = "SELECT SUM(tongtien) AS tongDoanhThu FROM hoadon WHERE trangthai != 4";
    return pdo_query_one($sql);  
}
public function tongDonHang() {
    $sql = "SELECT COUNT(*) AS tongdon FROM hoadon WHERE trangthai != 4";
    return pdo_query_one($sql);
}
public function loadSodo($dateFrom, $dateTo){
    $sql = "SELECT DATE(ngaygiodat) as ngay, ";
        $sql .= "COUNT(id) as so_luong_don, ";
        $sql .= "SUM(tongtien) as doanh_thu ";
        $sql .= "FROM hoadon ";
        $sql .= "WHERE trangthai != '4' ";
        $sql .= "AND DATE(ngaygiodat) >= '$dateFrom' ";
        $sql .= "AND DATE(ngaygiodat) <= '$dateTo' ";
        $sql .= "GROUP BY DATE(ngaygiodat) ";
        $sql .= "ORDER BY DATE(ngaygiodat) ASC";
        return pdo_query($sql);
}

}
?>
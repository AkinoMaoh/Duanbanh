<?php
include_once("pdo.php");

class ThongKe
{

    public function getAllNew()
    {
        $sql = "SELECT sp.*, dm.name AS tendanhmuc
                FROM sanpham sp
                JOIN danhmuc dm ON sp.iddm = dm.id
                WHERE sp.deleted = 0
                ORDER BY sp.id DESC
                LIMIT 10";
        return pdo_query($sql);
    }

    public function getAllBanChay()
    {
        $sql = "SELECT sp.id, sp.name, sp.price, sp.img, sp.mota, dm.name AS tendanhmuc,
                SUM(cthd.soluong) AS tong_mua
                FROM chitiethoadon AS cthd
                JOIN sanpham AS sp ON cthd.id_sanpham = sp.id
                JOIN danhmuc AS dm ON sp.iddm = dm.id
                GROUP BY sp.id
                ORDER BY tong_mua DESC
                LIMIT 10;
                ";
        return pdo_query($sql);
    }

    public function soLuongBan()
    {
        $sql = "SELECT SUM(cthd.soluong) AS tong_soluong
                FROM chitiethoadon AS cthd
                JOIN hoadon AS hd ON cthd.id_hoadon = hd.id
                WHERE hd.trangthai != 4;";
        return pdo_query_one($sql);
    }
    public function doanhThu()
    {
        $sql = "SELECT SUM(tongtien) AS tongDoanhThu FROM hoadon WHERE trangthai != 4";
        return pdo_query_one($sql);
    }
    public function tongDonHang()
    {
        $sql = "SELECT COUNT(*) AS tongdon FROM hoadon WHERE trangthai != 4";
        return pdo_query_one($sql);
    }
    public function loadSodo($dateFrom, $dateTo)
    {
        $sql = "SELECT DATE(ngaygiodat) AS ngay, COUNT(id) AS so_luong_don,
                SUM(tongtien) AS doanh_thu FROM hoadon WHERE trangthai != 4
                AND DATE(ngaygiodat) BETWEEN '$dateFrom' AND '$dateTo'
                GROUP BY DATE(ngaygiodat)
                ORDER BY ngay ASC";
        return pdo_query($sql);
    }
}

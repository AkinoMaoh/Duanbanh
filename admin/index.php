<?php
include_once("Controller/DanhMucController.php");
include_once("Controller/SanPhamController.php");
include_once("Controller/HoaDonController.php");
include_once("Controller/ThongKeController.php");
include_once("Controller/LoginController.php");

$danhMuc = new DanhMucController();
$sanPham = new SanPhamController();
$hoaDon = new HoaDonController();
$thongKe = new ThongKeController();
$Login = new LoginController();
if(isset($_GET['action']) && $_GET['action'] != "") {
$action = $_GET['action'];
    switch($action) {
        //danhmuc
        case "login":
            $danhMuc->index();
            break;
        case "listdanhmuc":
            $danhMuc->index();
            break;
        case "createdanhmuc":
            $danhMuc->create();
            break;
        case "storedanhmuc":
            $danhMuc->store();
            break;
        case "editdanhmuc":
            $danhMuc->edit();
            break;
        case "updatedanhmuc":
            $danhMuc->update();
            break;
        case "deletedanhmuc":
            $danhMuc->delete();
            break;
        case "restoredanhmuc":
            $danhMuc->restore();
            break;
        case "listsanpham":
            $sanPham->index();
            break;
        case "createsanpham":
            $sanPham->create();
            break;
        case "storesanpham":
            $sanPham->store();
            break;
        case "editsanpham":
            $sanPham->edit();
            break;
        case "updatesanpham":
            $sanPham->update();
            break;
        case "deletesanpham":
            $sanPham->delete();
            break;
        case "restoresanpham":
            $sanPham->restore();
            break;
        case "listhoadon":
            $hoaDon->index();
            break;
        case "chitiethoadon":
            $hoaDon->invoiceDetails();
            break;
        case "update_status":
            $hoaDon->update_status();
            break;
        case "listthongke":
            $thongKe->index();
            break;
        case "top10spnew":
            $thongKe->top10SpNew();
            break;
        case "top10spbanchaynhat":
            $thongKe->top10spBanChayNhat();
            break;
            
    }
} else {
    $danhMuc->index();
}

?>
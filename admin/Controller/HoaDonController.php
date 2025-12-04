<?php
require_once("Model/HoaDon.php");

class HoaDonController
{
    private $hoaDonModel;

    public function __construct()
    {
        $this->hoaDonModel = new HoaDon();
    }

    public function index()
    {
        $allHoaDon = $this->hoaDonModel->getAll();
        include_once("views/hoadon/list.php");
    }

    public function create()
    {
        include_once("./views/hoadon/create.php");
    }

    // public function store() {
    //     if(isset($_POST['ten'])) {
    //         $ten = $_POST['ten'];
    //         $this->danhMuc->insert($ten); // Gọi function insert ở model.
    //         header("Location:index.php"); // Điều hướng trở lại trang index
    //     }
    // }

    public function invoiceDetails() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $hoaDon = $this->hoaDonModel->getOne($id);
            $listChiTiet = $this->hoaDonModel->getChiTiet($id);
            
            include_once("views/hoadon/invoicedetails.php");
        }
    }

    // public function update() {
    //     if(isset($_POST['id'])) {
    //         $id = $_POST['id'];
    //         $ten = $_POST['ten'];
    //         $this->danhMuc->update($id, $ten);
    //         header("Location:index.php");
    //     }
    // }

    public function delete() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->hoaDonModel->delete($id);
            header("Location: ?action=listhoadon");
        }
    }

    public function restore() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->hoaDonModel->restore($id);
            header("Location: ?action=listhoadon");
        }
    }
}
?>
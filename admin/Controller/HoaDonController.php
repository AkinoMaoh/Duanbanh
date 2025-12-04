<?php
include_once("Model/HoaDon.php");
class HoaDonController
{
    private $hoaDon;
    private $danhMuc;

    public function __construct()
    {
        $this->hoaDon = new HoaDon();
    }

    // Phương thức list
    public function index()
    {
        $allHoaDon = $this->hoaDon->getAll();
        include_once("./views/hoadon/list.php");
    }

    public function create()
    {
        include_once("./views/hoadon/create.php");
    }

 

    public function invoiceDetails() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $hoaDon = $this->hoaDon->getOne($id);
            include_once("./views/hoadon/invoicedetails.php");
        }
    }


    public function delete() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->danhMuc->delete($id);
            header("Location:index.php");
        }
    }

    public function restore() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->danhMuc->restore($id);
            header("Location:index.php");
        }
    }
}

?>
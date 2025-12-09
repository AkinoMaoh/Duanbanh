<?php

use function PHPSTORM_META\map;

include_once("Model/ThongKe.php");
class ThongKeController
{
    private $sanPham;
    private $danhMuc;
    private $thongKe;
    

    public function __construct()
    {
        $this->sanPham = new SanPham();
        $this->danhMuc = new DanhMuc();
        $this->thongKe = new ThongKe();
    }

    // Phương thức list
    public function index()
    {
        $allSanPham = $this->thongKe->getAll();
         $soLuongDaBan = $this->thongKe->soLuongBan();
    $tongDaBan = isset($soLuongDaBan['soLuongDaBan']) ? $soLuongDaBan['soLuongDaBan'] : 0;
         $hienThiTK = $this->thongKe->getTK();
         $productsNew = $this->thongKe->getAllNew();
          $productsBanChay = $this->thongKe->getAllBanChay();
          foreach($productsNew as $key => $item) {
            $productsNew[$key]['tendanhmuc'] = $this->danhMuc->getOne($item['iddm'])['name'];
        }
        foreach($allSanPham as $key => $item) {
            $allSanPham[$key]['tendanhmuc'] = $this->danhMuc->getOne($item['iddm'])['name'];
        }
        include_once("./views/thongke/list.php");
    }
    public function top10SpNew()
    {
        
         $productsNew = $this->thongKe->getAllNew();
        foreach($productsNew as $key => $item) {
            $productsNew[$key]['tendanhmuc'] = $this->danhMuc->getOne($item['iddm'])['name'];
        }
        include_once("./views/thongke/top10SpNew.php");
    }
    public function top10SpBanChayNhat()
    {
         $productsBanChay = $this->thongKe->getAllBanChay();
        include_once("./views/thongke/top10SpBanChayNhat.php");
    }
    public function hienTaiKhoan(){
        $hienThiTK = $this->thongKe->getTK();
          include_once("./views/thongke/list.php");
    }

    
}
    ?>
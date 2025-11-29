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
        foreach($allSanPham as $key => $item) {
            $allSanPham[$key]['tendanhmuc'] = $this->danhMuc->getOne($item['iddm'])['name'];
        }
        include_once("./views/thongke/list.php");
    }
}
    ?>
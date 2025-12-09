<?php
include_once("Model/Cart.php");
class CheckOutController {
    private $cart;

    public function __construct()
    {
        $this->cart = new Cart();
    }
    public function add(){
        if(isset($_GET['idsp'])) {
            $idSp = $_GET['idsp'];
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = [];
            }
            $tonTaiSP = false;
            foreach($_SESSION['cart'] as $key => $item){
                if($item['idsp'] == $idSp){
                    $_SESSION['cart'][$key]['soLuong']++;
                    $tonTaiSP = true;
                    break;
                }
            }
            if($tonTaiSP == false){
                 $_SESSION['cart'][] = 
            ["idsp" => $idSp, "soLuong" => 1];
            }
                
                
           
        }
       
        header("Location:index.php?action=cart");
    }
    public function index(){
        $tongTien = 0;
        if ( isset($_SESSION['cart'])){
            
            foreach($_SESSION['cart'] as $key => $item){
                $sanPhamDetail = $this->cart->getAllProductById($item['idsp']);
                $_SESSION['cart'][$key]['name'] = $sanPhamDetail['name'];
                $_SESSION['cart'][$key]['price'] = $sanPhamDetail['price'];
                $_SESSION['cart'][$key]['img'] = $sanPhamDetail['img'];
                $tongTien += $_SESSION['cart'][$key]['soLuong'] * $sanPhamDetail['price'];
            }
        }else{
            $_SESSION['cart'] = [];
        }
        include_once("views/checkout.php");
    }
  
    public function add1(){
        if (isset($_POST['ten']) && $_POST['ten'] != "" && isset($_SESSION['cart'])) {
            $ten = $_POST['ten'];
            
            $diaChi = $_POST['diachi'];
            $sdt = $_POST['dienthoai'];
            $pttt = isset($_POST['chuyenkhoan']) ? 1 : 0;
            $tongTien = 0;
            foreach($_SESSION['cart'] as $item){
                $tongTien += $item['soLuong'] * $item['price'];
            }
            $hoaDonId = $this->cart->insertHoadon($ten, $diaChi, $sdt, $tongTien,  $pttt);
            
            foreach($_SESSION['cart'] as $item){
                $this->cart->insertCTHoadon($hoaDonId, $item['idsp'], $item['soLuong'], $item['price']);
                unset($_SESSION['cart']);
            }
       
    }
     header("Location:index.php?action=showcheckout");
}

}

?>
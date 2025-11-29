<?php
include_once("Model/Cart.php");
class CartController {
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
    public function cart(){
        if ( isset($_SESSION['cart'])){
            $tongTien = 0;
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
        include_once("views/cart.php");
    }
}

?>
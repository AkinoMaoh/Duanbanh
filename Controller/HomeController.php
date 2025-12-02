<?php
include_once("Model/Home.php");

class HomeController {
     private $homeModel;
    

    public function __construct()
    {
        $this->homeModel = new Home();
      
    }
    public function home() {
        $products = $this->homeModel->getAll();
        $productsNew = $this->homeModel->getAllNew();
        $productsDanhMuc = $this->homeModel->getAllDanhMuc();
        
        include_once("views/home.php");
    }
    public function aboutUs() {
        include_once("views/aboutUs.php");
}
    public function contact() {
        include_once("views/contact.php");
}
}
?>
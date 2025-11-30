<?php 
include_once("Controller/HomeController.php");
include_once("Controller/CartController.php");
include_once("Controller/CheckOutController.php");
$home = new HomeController();
$cart = new CartController();
$checkOut = new CheckOutController();
session_start();
if(isset($_GET['action']) && $_GET['action'] != "") {
    $action = $_GET['action'];
    switch($action) {
        case "home":
            $home->home();   
            break;
        case "aboutUs":
            $home->aboutUs();   
            break;
        case "contact":
            $home->contact();   
            break;
        case "addtocart":
            $cart->add();   
            break;
        case "cart":
            $cart->cart();   
            break;
        case "showcheckout":
            $checkOut->index();   
            break;
    }
} else {
    $home->home();   
} 
?>

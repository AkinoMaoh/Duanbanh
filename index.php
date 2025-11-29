<?php 
include_once("Controller/HomeController.php");
$home = new HomeController();
if(isset($_GET['action']) && $_GET['action'] != "") {
    $action = $_GET['action'];
    switch($action) {
        case "home":
            $home->home();   
            break;
        case "aboutUs":
            $home->aboutUs();   
            break;
    }
} else {
    $home->home();   
} 
?>

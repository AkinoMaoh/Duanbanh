<?php 
if(isset($_GET['action']) && $_GET['action'] != "") {
$action = $_GET['action'];
    switch($action) {
        case "home":
            include_once("views/home.php");
            break;
      
    }
} else {
    include_once("views/home.php");
}
?>
<?php
include_once("Model/Search.php");

class SearchController {

    private $search;

    public function __construct() {
        $this->search = new Search();
    }

    public function search() {
        $keyword = "";

        if (isset($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);
        }

        $listProduct = [];

        if ($keyword != "") {
            $listProduct = $this->search->searchProduct($keyword);
        }

        include_once("views/timkiemsanpham.php");
    }

}

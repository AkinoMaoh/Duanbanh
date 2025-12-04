<?php
include_once("Model/Top10.php");

class Top10Controller {
     private $Top10;
    

    public function __construct()
    {
        $this->Top10 = new Top10();
      
    }
    public function top10New() {
        $top10New = $this->Top10->top10New();
        
        include_once("views/top10SpNew.php");
    }
}
?>
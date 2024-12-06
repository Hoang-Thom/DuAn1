<?php
    class HomeController {
        // thuộc tính
        private $HomeModel;
        // khởi tạo
        public function __construct() {
            require_once('../model/HomeModel.php');
            $this->HomeModel = new HomeModel();
        }

        // tạo trang sanpham
        public function renderHome() {
            // $sumProduct=$this->HomeModel->getSumProduct();
            $Totalproduct=$this->HomeModel->getTotalproduct();
            $totalOrders=$this->HomeModel->getTotalOrders();
            $totalArticles=$this->HomeModel->getTotalArticles();
            $totalAccounts=$this->HomeModel->getTotalAccounts();
            $SumMoney=$this->HomeModel->getSumMoney();
            $Products=$this->HomeModel->getAllProduct();
            //print_r($Products);
            $countProByCate = $this->HomeModel->getCountProByCate();
            $Best = $this -> HomeModel -> getBestProduct();
            require_once('view/home.php');

        }
        
    }

?>
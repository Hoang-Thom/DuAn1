<?php

    class SaleController {
        // thuộc tính
        private $SaleModel;
        // khởi tạo
        public function __construct() {
            require_once('../model/SaleModel.php');
            $this->SaleModel = new SaleModel();
        }

        // tạo trang danh muc
        public function renderSale() {
            $Sales=$this->SaleModel ->getAllSale();
            require_once('view/Sale.php');
        }

        public function renderaddsal(){
            require_once ('view/addsal.php');
        }

        public function addSale($data){
            $this->SaleModel->addSale($data);
            header('location: index.php?page=Sale');
            //print_r($data);
        }

        public function deleteSale($id){
            $this->SaleModel->deleteSale($id);
            header('location: index.php?page=Sale');
        }

        public function renderEditSale($id){
            $Sale=$this->SaleModel ->getSaleById($id);
            require_once 'view/editSale.php';
        }

        public function editSale($data){
            $Sale=$this->SaleModel ->editSale($data);
            require_once 'view/editSale.php';
            header('location: index.php?page=Sale');
        }
    }

?>
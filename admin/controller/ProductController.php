<?php

    class ProductController {
        // thuộc tính
        private $ProductModel;
        // khởi tạo
        public function __construct() {
            require_once('../model/ProductModel.php');
            $this->ProductModel = new ProductModel();
        }

        // tạo trang sanpham
        public function renderProduct() {
            $Products=$this->ProductModel->getAllProduct();
            require_once('view/product.php');
        }

        public function renderaddpro(){
            require_once ('view/addpro.php');
        }

        public function addProduct($data){
            $this->ProductModel->addProduct($data);
            header('location: index.php?page=Product');
            //print_r($data);
        }

        public function deleteProduct($id){
            $this->ProductModel->deleteProduct($id);
            header('location: index.php?page=Product');
        }

        public function renderEditpro($id){
            $Product=$this->ProductModel ->getProductById($id);
            require_once 'view/editpro.php';
        }

        public function editProduct($data){
            $Product=$this->ProductModel ->editProduct($data);
            require_once 'view/editpro.php';
            header('location: index.php?page=Product');
        }
    }

?>
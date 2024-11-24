<?php

    class ProductController {
        // thuộc tính
        private $productModel;

        // khởi tạo
        public function __construct() {
            require_once('../model/ProductModel.php');
            $this->productModel = new ProductModel();
        }

        // phương thức
        // tạo trang chủ
        public function renderHome() {
            $productsCate1= $this->productModel->getProByCate(5);
            $productsCate2= $this->productModel->getProByCate(6);
            require_once('view/home.php');
        }
        // tạo trang sản phẩm
        public function renderShop() {
            // $products = $this->productModel->getAllProduct();  lấy tất cả sản phẩm
            $productsCake = $this->productModel->getProByCate(5);
            $productsPie = $this->productModel->getProByCate(6);
            $productsBread = $this->productModel->getProByCate(7);
            $productsTira = $this->productModel->getProByCate(8);
            $productsCup = $this->productModel->getProByCate(9);
            $productsPudding = $this->productModel->getProByCate(10);
            $productsChees = $this->productModel->getProByCate(11);
            $productsCook = $this->productModel->getProByCate(12);
            require_once('view/shop.php');
        }
    }


?>
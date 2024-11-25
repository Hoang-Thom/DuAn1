<?php

    class ProductController {
        // thuộc tính
        private $productModel;
        private $categoryModel;

        // khởi tạo
        public function __construct() {
            require_once('../model/ProductModel.php');
            $this->productModel = new ProductModel();
            require_once('../model/CategoryModel.php');
            $this->categoryModel = new CategoryModel();
        }

        // phương thức
        // tạo trang chủ
        public function renderHome() {
            $productsCate1= $this->productModel->getProNew();
            $productsCate2= $this->productModel->getProByCateLIMIT5(6);
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

            $categories = $this->categoryModel->getAllCategory();
            require_once('view/shop.php');
        }
        // tạo trang chi tiết sản phẩm
        public function renderDetail($id) {
            $product= $this->productModel->getProductById($id);
            $relateProduct= $this->productModel-> getRelateProduct($id);
            // print_r($relateProduct);
            require_once('view/detail.php');
        }
        


    }


?>
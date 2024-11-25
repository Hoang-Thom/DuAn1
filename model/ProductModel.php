<?php

    require_once('Database.php');
    class ProductModel {
        // lấy tất cả
        public function getAllProduct(){
            $sql = "SELECT * FROM sanpham";
            return Database::getInstance()->getAll($sql);
        }

        // lấy sản phẩm theo danh mục
        public function getProByCate($id){
            $sql = "SELECT * FROM sanpham WHERE id_danhmuc = $id";
            return Database::getInstance()->getAll($sql);
        }

        // lấy 5 sản phẩm theo danh mục
        public function getProByCateLIMIT5($id){
            $sql = "SELECT * FROM sanpham WHERE id_danhmuc = $id LIMIT 6";
            return Database::getInstance()->getAll($sql);
        }

        // lấy sản phẩm theo id
        public function getProductById($id){
            $sql = "SELECT * FROM sanpham WHERE id_sanpham = $id";
            return Database::getInstance()->getOne($sql);
        }

        // lấy sản tương tự
        public function getRelateProduct($id){
            $sql = "SELECT * FROM sanpham WHERE id_danhmuc = (SELECT id_danhmuc FROM sanpham WHERE id_sanpham = $id) LIMIT 4";
            return Database::getInstance()->getAll($sql);
        }

    }


?>
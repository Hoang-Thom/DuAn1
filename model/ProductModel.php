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

        // lấy sản phẩm theo id
        public function getProductById($id){
            $sql = "SELECT * FROM sanpham WHERE id_sanpham = $id";
            return Database::getInstance()->getOne($sql);
        }

    }


?>
<?php

    require_once('Database.php');
    class ProductModel {
        // lấy tất cả sản phẩm
        public function getAllProduct(){
            $sql = "SELECT * FROM sanpham";
            return Database::getInstance()->getAll($sql);
        }

        // lấy sản phẩm theo danh mục
        public function getProByCate($id){
            $sql = "SELECT * FROM sanpham WHERE id_danhmuc = $id";
            return Database::getInstance()->getAll($sql);
        }

        // đếm có bnhiu sản phẩm theo danh mục
        // public function getPro_ QuantityByCate($id){
        //     $sql = "SELECT * FROM sanpham WHERE id_danhmuc = $id";
        //     return Database::getInstance()->getPro_Quantity($sql);
        // }

        // lấy sản phẩm mới nhất
        public function getProNew(){
            $sql = "SELECT * FROM sanpham ORDER BY id_sanpham DESC LIMIT 8";
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

        // lấy sản phẩm tương tự
        public function getRelateProduct($id){
            $sql = "SELECT * FROM sanpham WHERE id_danhmuc = (SELECT id_danhmuc FROM sanpham WHERE id_sanpham = $id) AND id_sanpham!=$id  LIMIT 4";
            return Database::getInstance()->getAll($sql);
        }

        // tìm kiếm sản phẩm
        public function getProBySreach($search){
            $sql = "SELECT * FROM sanpham WHERE 1";
            if($search!=""){
                $sql .= " AND Ten_san_pham LIKE '%".$search."%' ";
            }
            return Database::getInstance()->getAll($sql);
        }

    }



?>
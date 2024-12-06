<?php

    require_once('Database.php');
    class ProductModel {
        // lấy tất cả
        public function getAllProduct(){
            $sql = "SELECT pr.*, dm.Ten_danh_muc FROM sanpham AS pr INNER JOIN danhmuc AS dm ON pr.ID_danhmuc = dm.ID_danhmuc";
            return Database::getInstance()->getAll($sql);
        }
        //lay so luong san pham
        public function getQuantityProduct(){
            $sql = "SELECT * FROM sanpham";
            return Database::getInstance()->getAll($sql);
        }

        // lấy sản phẩm theo id
        public function getProductById($id){
            $sql = "SELECT * FROM sanpham WHERE id_sanpham = $id";
            return Database::getInstance()->getOne($sql);
        }
        //them san pham
        public function addProduct($data){
            $sql="INSERT INTO sanpham(Ten_san_pham,Gia_san_pham,So_luong,Mo_ta_san_pham,ID_danhmuc,Anh_san_pham) VALUES (?,?,?,?,?,?)";
            $params=array_values($data);
            return Database::getInstance()->execute($sql,$params);
        }
        //xoa san pham
        public function deleteProduct($id){
            $sql="DELETE FROM sanpham WHERE ID_sanpham=?";
            return Database::getInstance()->execute($sql,[$id]);
        }
    
        // public function getCategoryById($id){
        //     $sql ="SELECT * FROM danhmuc WHERE ID_danhmuc = $id";
        //     return Database::getInstance()->getOne($sql);
        // }
        public function editProduct($data){
            $sql = "UPDATE sanpham 
            SET Ten_san_pham=?, Gia_san_pham=?, So_luong=?, Mo_ta_san_pham=?,ID_danhmuc=?, Anh_san_pham=?
            WHERE ID_sanpham=?";
            $params = array_values($data);
            return Database::getInstance()->execute($sql, $params);
        }
        

    }


?>
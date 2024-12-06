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

        // thêm bình luận
        public function addComment($data){
            $sql ="INSERT INTO binhluan (ID_nguoidung, Noi_dung, ID_sanpham, Hinh_anh) VALUES (?,?,?,?)";
            $params=array_values($data);
            // var_dump($params); 
            return Database::getInstance()->execute($sql,$params);
        }

        // lấy bình luận theo id
        public function getCommentByProductId($id){
            $sql = "SELECT BL.*, User.Ten_nguoidung 
                    FROM binhluan BL 
                    JOIN nguoidung User ON BL.ID_nguoidung = User.ID_nguoidung 
                    WHERE BL.ID_sanpham = $id";
        return Database::getInstance()->getAll($sql, [$id]);
        }

    }



?>
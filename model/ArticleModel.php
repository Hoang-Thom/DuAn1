<?php

    require_once('Database.php');
    class ArticleModel {
        // lấy tất cả
        public function getAllArticle(){
            //$sql = "SELECT pr.*, dm.Ten_danh_muc FROM sanpham AS pr INNER JOIN danhmuc AS dm ON pr.ID_danhmuc = dm.ID_danhmuc;";

            $sql = "SELECT art.*, acc.Ten_nguoidung FROM baiviet AS art INNER JOIN nguoidung AS acc ON art.ID_nguoi_dung = acc.ID_nguoidung ORDER BY ID_baiviet DESC";
            //$sql="SELECT * FROM baiviet";
            return Database::getInstance()->getAll($sql);
        }

        // lấy sản phẩm theo id
        public function getArticleById($id){
            $sql = "SELECT * FROM baiviet WHERE ID_baiviet = $id";
            return Database::getInstance()->getOne($sql);
        }
        //them bai viet
        public function addArticle($data){
            $sql="INSERT INTO baiviet(Tieu_de,Ngay_viet,ID_nguoi_dung,Hinh_anh) VALUES (?,?,?,?)";
            $params=array_values($data);
            return Database::getInstance()->execute($sql,$params);
        }
        // Kiểm tra ID người dùng có tồn tại không
        public function isValidUserId($id) {
            $sql = "SELECT COUNT(*) FROM nguoidung WHERE ID_nguoidung = ?";
            return Database::getInstance()->getOne($sql, [$id]) > 0;
        }
    
    
    // Thêm bài viết mới
    
    //     public function addArticle($data) {
    //         // Kiểm tra ID người dùng
    //         if (isset($data['ID_nguoi_dung'])) {
    //             // Sử dụng $array['ID_nguoi_dung'] ở đây
    //             $sql = "INSERT INTO baiviet (Tieu_de, Ngay_viet, Hinh_anh, Noi_dung, ID_nguoi_dung) 
    //                         VALUES (?, ?, ?, ?, ?)";
    //                 $params = array_values($data);
    //                 return Database::getInstance()->execute($sql, $params);
    //         } else {
    //             // Xử lý trường hợp không tồn tại khóa 'ID_nguoi_dung'
    //         }       
    // }


        //xoa san pham
        public function deleteArticle($id){
            $sql="DELETE FROM baiviet WHERE ID_baiviet=?";
            return Database::getInstance()->execute($sql,[$id]);
        }
    //mowr ra
        // public function getArticleId($id){
        //     $sql ="SELECT * FROM baiviet WHERE ID_baiviet = $id";
        //     return Database::getInstance()->getOne($sql);
        // }
    
        // public function editArticle($data){
        // $sql="UPDATE baiviet SET Tieu_de=?,Ngay_viet=?,Hinh_anh=?,Noi_dung=? WHERE ID_baiviet=?";
        // $params=array_values($data);
        // // return Database::getInstance()->execute($sql,$params);
        // }

        public function editArticle($data) {
            $sql = "UPDATE baiviet SET Tieu_de=?,Ngay_viet=?,Noi_dung=?,Hinh_anh=? WHERE ID_baiviet=?";
            $params = array_values($data);
            return Database::getInstance()->execute($sql, $params);
        }
        

    }


?>
<?php

    require_once('Database.php');
    class BlogModel {
        // lấy tất cả bài viết sắp theo ngày mới nhất
        public function getAllBlog(){
            $sql = "SELECT * FROM baiviet ORDER BY Ngay_viet DESC";
            return Database::getInstance()->getAll($sql);
        }

        // Lấy 4 bài viết mới nhất
        public function getLatestBlog() {
            $sql = "SELECT * FROM baiviet ORDER BY Ngay_viet DESC LIMIT 4";  // Lấy bài viết mới nhất theo ngày viết
            return Database::getInstance()->getAll($sql);
        }

        // Lấy bài viết theo ID
        public function getBlogById($id) {
            $sql = "SELECT * FROM baiviet WHERE ID_baiviet = $id";
            return Database::getInstance()->getOne($sql);
        }

        // Lấy bài viết cũ nhất
        public function getOldestBlog() {
            $sql = "SELECT * FROM baiviet ORDER BY Ngay_viet ASC LIMIT 1";
            return Database::getInstance()->getOne($sql);
        }

    }


?>
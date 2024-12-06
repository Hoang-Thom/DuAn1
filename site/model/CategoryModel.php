<?php

    require_once('Database.php');
    class CategoryModel {
        // lấy tất cả danh mục sắp xếp tên theo thứ tự tăng dần
        public function getAllCategory(){
            $sql = "SELECT * FROM danhmuc ORDER BY Ten_danh_muc ASC LIMIT 8";
            return Database::getInstance()->getAll($sql);
        }
    }

?>
<?php
    require_once('Database.php');
    class HomeModel {
        public function getTotalProduct(){
            $sql = "SELECT COUNT(`ID_sanpham`) AS total_product FROM sanpham";
            return Database::getInstance()->getOne($sql);
        }

        public function getTotalOrders(){
            $sql = "SELECT COUNT(`ID_donhang`) AS total_donhang FROM don_hang";
            return Database::getInstance()->getOne($sql);
        }

        public function getTotalArticles(){
            $sql = "SELECT COUNT(`ID_baiviet`) AS total_baiviet FROM baiviet";
            return Database::getInstance()->getOne($sql);
        }

        public function getTotalAccounts(){
            $sql = "SELECT COUNT(`ID_nguoidung`) AS total_nguoidung FROM nguoidung";
            return Database::getInstance()->getOne($sql);
        }

        public function getSumMoney(){
            $sql = "SELECT sum(Tong_tien) AS Sum_Money FROM don_hang";
            return Database::getInstance()->getOne($sql);
        }

        public function getAllProduct(){
            $sql = "SELECT * FROM sanpham";
            return Database::getInstance()->getAll($sql);
        }

        public function getCountProByCate (){
            $sql = "SELECT c.Ten_danh_muc, COUNT(p.ID_sanpham) AS Soluong
                    FROM danhmuc c
                    LEFT JOIN sanpham p ON c.ID_danhmuc = p.ID_danhmuc
                    GROUP BY c.ID_danhmuc; ";
            return Database::getInstance()->getAll($sql);
        }
    }


?>
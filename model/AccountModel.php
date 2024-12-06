<?php

    require_once('Database.php');
    class AccountModel {
        // lấy tất cả
        public function getAllAccount(){
            $sql = "SELECT * FROM nguoidung";
            return Database::getInstance()->getAll($sql);
        }

        // lấy tai khoan theo id
        public function getAccountById($id){
            $sql = "SELECT * FROM nguoidung WHERE ID_nguoidung = $id";
            return Database::getInstance()->getOne($sql);
        }
        //them san pham
        public function addAccount($data){
            $sql="INSERT INTO nguoidung (Ten_nguoidung,Mat_khau,So_dien_thoai,Email,Vai_tro) VALUES (?,?,?,?,?)";
            $params=array_values($data);
            return Database::getInstance()->execute($sql,$params);
        }
        //xoa san pham
        public function deleteAccount($id){
            $sql="DELETE FROM nguoidung WHERE ID_nguoidung=?";
            return Database::getInstance()->execute($sql,[$id]);
        }

            // Kiểm tra số điện thoại và tên người dùng có tồn tại
            public function checkExistingUser($tennguoidung, $sodienthoai) {
                $sql = "SELECT * FROM nguoidung WHERE Ten_nguoidung = ? OR So_dien_thoai = ?";
                $params = [$tennguoidung, $sodienthoai];
                $result = Database::getInstance()->getRow($sql, $params);
                return $result !== null; // Trả về true nếu tồn tại, false nếu không
            }
    }


?>
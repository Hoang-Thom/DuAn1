<?php

     require_once('Database.php');
     class UserModel{
        public function getUser($data){
            // $params=array_values($data);
            if (isset($data['Email']) && isset($data['Mat_khau'])) {
                $email = $data['Email'];
                $matKhau = $data['Mat_khau'];
        
                // Tiến hành truy vấn cơ sở dữ liệu với $email và $matKhau
                // ...
            } else {
                // Xử lý khi không có dữ liệu cần thiết
                return null; // Hoặc thông báo lỗi
            }
            $sql="SELECT * FROM nguoidung WHERE Email='".$data['Email']."' AND Mat_khau='".$data['Mat_khau']."'";           
            return Database::getInstance()->getOne($sql);           
        }
        public function addUser($data){
            $sql="INSERT INTO nguoidung(Ten_nguoidung,So_dien_thoai,Email,Mat_khau,Dia_chi) VALUE(?,?,?,?,?)";
            $params=array_values($data);
            return Database::getInstance()->execute($sql,$params);
        }
     }
?>
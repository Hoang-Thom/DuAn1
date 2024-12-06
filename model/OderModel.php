<?php

    require_once('Database.php');
    class OderModel {
        // lấy tất cả
        public function getAllOder(){
            // $sql = "SELECT pr.*, dm.Ten_danh_muc FROM sanpham AS pr INNER JOIN danhmuc AS dm ON pr.ID_danhmuc = dm.ID_danhmuc;";
            //$sql = "SELECT odr*, acc.Ten_nguoidung FROM donhang AS odr INNER JOIN nguoidung AS acc ON odr.ID_nguoi_dung = acc.ID_nguoidung;";
            $sql = "SELECT dh.*, nd.Ten_nguoidung, km.Ma_giam  
            FROM don_hang  AS dh 
            INNER JOIN nguoidung AS nd ON dh.ID_nguoi_dung = nd.ID_nguoidung
            INNER JOIN khuyen_mai AS km ON dh.ID_khuyenmai = km.ID_khuyenmai
            ORDER BY ID_donhang DESC";
            return Database::getInstance()->getAll($sql);
        }

        // lấy don hang theo id
        public function getOderById($id){
            $sql = "SELECT * FROM don_hang  WHERE id_donhang = $id";
            return Database::getInstance()->getOne($sql);
        }
        //them san pham
        // public function addOder($data){
        //     $sql="INSERT INTO sanpham(tensanpham,giasanpham,soluongsp,dmsp,anhsanpham,motasp) VALUES (?,?,?,?,?,?)";
        //     $params=array_values($data);
        //     return Database::getInstance()->execute($sql,$params);
        // }
              
    
        // public function getCategoryById($id){
        //     $sql ="SELECT * FROM danhmuc WHERE ID_danhmuc = $id";
        //     return Database::getInstance()->getOne($sql);
        // }
    
        public function editOder($data){
         $sql="UPDATE don_hang SET Trang_thai=".$data['Trang_thai']." WHERE ID_donhang=".$data['ID_donhang'];
         //exit;
         //$params=array_values($data);
         return Database::getInstance()->execute($sql);
        }

    }


?>
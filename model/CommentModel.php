<?php
require_once ('Database.php');
class CommentModel{
    //lay tat ca dannh muc
    public function getAllComment(){
        //$sql="SELECT *FROM binhluan";

        // $sql = "SELECT dh.*, nd.Ten_nguoidung, km.Ma_giam  
        //     FROM don_hang  AS dh 
        //     INNER JOIN nguoidung AS nd ON dh.ID_nguoi_dung = nd.ID_nguoidung
        //     INNER JOIN khuyen_mai AS km ON dh.ID_khuyenmai = km.ID_khuyenmai";
        
        $sql = "SELECT bl.*, nd.Ten_nguoidung, sp.Ten_san_pham
            FROM binhluan AS bl 
            INNER JOIN nguoidung AS nd ON bl.ID_nguoidung = nd.ID_nguoidung
            INNER JOIN sanpham AS sp ON bl.ID_sanpham = sp.ID_sanpham";
        return Database::getInstance()->getAll($sql);
    }


    public function deleteComment($id){
            $sql="DELETE FROM binhluan WHERE ID_binhluan=?";
            return Database::getInstance()->execute($sql,[$id]);
        }
    
}
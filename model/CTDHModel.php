<?php
require_once ('Database.php');
class CTDHModel{
    //lay tat ca dannh muc
    // public function getAllCTDH($id){
    //     $sql="SELECT *FROM donhang_ch";
    //     return Database::getInstance()->getAll($sql);
    // }

    public function getAllCTDH($id){
        $sql = "SELECT dh.*, sp.Ten_san_pham, sp.Anh_san_pham,sp.Gia_san_pham,dh.Tong_tien
        FROM donhang_ch AS dh INNER JOIN sanpham AS sp 
        ON dh.ID_sanpham = sp.ID_sanpham WHERE dh.ID_donhang = $id";
        return Database::getInstance()->getOne($sql);
    }

    public function getdonhang($id){
        //$sql = "SELECT pr.*, dm.Ten_danh_muc FROM sanpham AS pr INNER JOIN danhmuc AS dm ON pr.ID_danhmuc = dm.ID_danhmuc"
        //$sql = "SELECT dh.*, km.Phan_tram_giam FROM don_hang AS dh INNER JOIN khuyen_mai AS km ON dh.ID_khuyenmai = km.ID_khuyenmai WHERE dh.ID_donhang = $id";
        // "SELECT bl.*, nd.Ten_nguoidung, sp.Ten_san_pham
        //     FROM binhluan AS bl 
        //     INNER JOIN nguoidung AS nd ON bl.ID_nguoidung = nd.ID_nguoidung
        //     INNER JOIN sanpham AS sp ON bl.ID_sanpham = sp.ID_sanpham";
        $sql="SELECT dh.*, nd.Ten_nguoidung,nd.So_dien_thoai, km.Phan_tram_giam,dh.Tong_tien
            FROM don_hang AS dh 
            INNER JOIN nguoidung AS nd ON dh.ID_nguoi_dung = nd.ID_nguoidung
            INNER JOIN khuyen_mai AS km ON dh.ID_khuyenmai = km.ID_khuyenmai
            WHERE dh.ID_donhang = $id";
        return Database::getInstance()->getOne($sql);
    }

    
    
}
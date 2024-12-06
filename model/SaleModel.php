<?php
require_once ('Database.php');
class SaleModel{
    //lay tat ca dannh muc
    public function getAllSale(){
        $sql="SELECT *FROM khuyen_mai";
        return Database::getInstance()->getAll($sql);
    }

    public function addSale($data){
        $sql="INSERT INTO khuyen_mai(Phan_tram_giam,Dieu_kien_ap_dung,Ngay_bat_dau,Ngay_ket_thuc,Ma_giam,So_luong) VALUES (?,?,?,?,?,?)";
        $params=array_values($data);
        return Database::getInstance()->execute($sql,$params);
    }

    public function deleteSale($id){
        $sql="DELETE FROM khuyen_mai WHERE ID_khuyenmai=?";
        return Database::getInstance()->execute($sql,[$id]);
    }

    public function getSaleById($id){
        $sql ="SELECT * FROM khuyen_mai WHERE ID_khuyenmai = $id";
        return Database::getInstance()->getOne($sql);
    }

    public function editSale($data){
    $sql="UPDATE khuyen_mai SET Phan_tram_giam=?,Dieu_kien_ap_dung=?,Ngay_bat_dau=?,Ngay_ket_thuc=?,Ma_giam=?,So_luong=? WHERE ID_khuyenmai=?";
    $params=array_values($data);
    return Database::getInstance()->execute($sql,$params);
    }
    
}
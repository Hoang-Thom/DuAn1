<?php
require_once ('Database.php');
class CTDHModel{
    //lay tat ca dannh muc
    public function getAllCTDH(){
        $sql="SELECT *FROM donhang_ch ";
        return Database::getInstance()->getAll($sql);
    }

    // public function addCTDH($data){
    //     $sql="INSERT INTO danhmuc(Ten_danh_muc,Anh_danh_muc) VALUES (?,?)";
    //     $params=array_values($data);
    //     return Database::getInstance()->execute($sql,$params);
    // }

    // public function deleteCTDH($id){
    //     $sql="DELETE FROM danhmuc WHERE ID_danhmuc=?";
    //     return Database::getInstance()->execute($sql,[$id]);
    // }

    public function getCTDHById($id){
        $sql ="SELECT * FROM donhang_ch WHERE ID_donhang = $id";
        return Database::getInstance()->getOne($sql);
    }

    // public function editCTDH($data){
    // $sql="UPDATE danhmuc SET Ten_danh_muc=?,Anh_danh_muc=? WHERE ID_danhmuc=?";
    // $params=array_values($data);
    // return Database::getInstance()->execute($sql,$params);
    // }
    
}
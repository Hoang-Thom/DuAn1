<?php
require_once ('Database.php');
class CategoryModel{
    //lay tat ca dannh muc
    public function getAllCategory(){
        $sql="SELECT *FROM danhmuc";
        return Database::getInstance()->getAll($sql);
        $Pros = $db->getAll($sql);
    }

    public function addCategory($data){
        $sql="INSERT INTO danhmuc(Ten_danh_muc,Anh_danh_muc) VALUES (?,?)";
        $params=array_values($data);
        return Database::getInstance()->execute($sql,$params);
    }

    public function deleteCategory($id){
        $sql="DELETE FROM danhmuc WHERE ID_danhmuc=?";
        return Database::getInstance()->execute($sql,[$id]);
    }

    public function getCategoryById($id){
        $sql ="SELECT * FROM danhmuc WHERE ID_danhmuc = $id";
        return Database::getInstance()->getOne($sql);
    }

    public function editCategory($data){
    $sql="UPDATE danhmuc SET Ten_danh_muc=?,Anh_danh_muc=? WHERE ID_danhmuc=?";
    $params=array_values($data);
    return Database::getInstance()->execute($sql,$params);
    }
    
}
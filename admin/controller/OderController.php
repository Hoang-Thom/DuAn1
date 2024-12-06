<?php

    class OderController {
        // thuộc tính
        private $OderModel;
        // khởi tạo
        public function __construct() {
            require_once('../model/OderModel.php');
            $this->OderModel = new OderModel();
        }

        // tạo trang don hang
        public function renderOder() {
            $Oders=$this->OderModel ->getAllOder();
            // var_dump($Oders);
            require_once('view/Oder.php');
        }

        // public function renderaddoder(){
        //     require_once ('view/addoder.php');
        // }

        // public function addOder($data){
        //     $this->OderModel->addOder($data);
        //     //header('location: index.php?page=Oder');
        //     print_r($data);
        // }


        // public function renderEditoder($id){
        //     $Oder=$this->OderModel ->getOderById($id);
        //     require_once 'view/editoder.php';
        // }

        public function editOder($data){
             $Oder=$this->OderModel->editOder($data);
         }
    }

?>
<?php

    class CategoryController {
        // thuộc tính
        private $CategoryModel;
        // khởi tạo
        public function __construct() {
            require_once('../model/CategoryModel.php');
            $this->CategoryModel = new CategoryModel();
        }

        // tạo trang danh muc
        public function renderCategory() {
            $Categories=$this->CategoryModel ->getAllCategory();
            require_once('view/Category.php');
        }

        public function renderaddcate(){
            require_once ('view/addcate.php');
        }

        public function addCategory($data){
            $this->CategoryModel->addCategory($data);
            header('location: index.php?page=Category');

        }

        public function deleteCategory($id){
            $this->CategoryModel->deleteCategory($id);
            header('location: index.php?page=Category');
        }

        public function renderEditCate($id){
            $Category=$this->CategoryModel ->getCategoryById($id);
            require_once 'view/editcate.php';
        }

        public function editCategory($data){
            $Category=$this->CategoryModel ->editCategory($data);
            require_once 'view/editcate.php';
            header('location: index.php?page=Category');
        }
    }

?>
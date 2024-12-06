<?php

    class ArticleController {
        // thuộc tính
        private $ArticleModel;
        // khởi tạo
        public function __construct() {
            require_once('../model/ArticleModel.php');
            $this->ArticleModel = new ArticleModel();
        }

        // tạo trang sanpham
        public function renderArticle() {
            $Articles=$this->ArticleModel ->getAllArticle();
            require_once('view/Article.php');
        }

        public function renderaddArt(){
            require_once ('view/addArt.php');
        }

        public function addArticle($data){
            $this->ArticleModel->addArticle($data);
            header('location: index.php?page=Article');
            //print_r($data);
        }

        public function deleteArticle($id){
            $this->ArticleModel->deleteArticle($id);
            header('location: index.php?page=Article');
        }

        public function renderEditArt($id){
            $Article=$this->ArticleModel ->getArticleById($id);
            require_once 'view/editArt.php';
            //print_r($Article);
        }

        public function editArticle($data){
            $Articles=$this->ArticleModel ->editArticle($data);
            require_once 'view/editArt.php';
            header('location: index.php?page=Article');
            //print_r($data);
        }
    }

?>
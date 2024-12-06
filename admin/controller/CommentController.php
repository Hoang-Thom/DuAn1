<?php

    class CommentController {
        // thuộc tính
        private $CommentModel;
        // khởi tạo
        public function __construct() {
            require_once('../model/CommentModel.php');
            $this->CommentModel = new CommentModel();
        }

        // tạo trang sanpham
        public function renderComment() {
            $Comments=$this->CommentModel ->getAllComment();
            // var_dump($Comments);
            require_once('view/Comment.php');
        }

        // public function renderaddpro(){
        //     require_once ('view/addpro.php');
        // }

        // public function addComment($data){
        //     $this->CommentModel->addComment($data);
        //     //header('location: index.php?page=Comment');
        //     print_r($data);
        // }

        public function deleteComment($id){
            $this->CommentModel->deleteComment($id);
            header('location: index.php?page=Comment');
        }

        // public function renderEditpro($id){
        //     $Comment=$this->CommentModel ->getCommentById($id);
        //     require_once 'view/editpro.php';
        // }

        // public function editComment($data){
        //     $Comment=$this->CommentModel ->editComment($data);
        //     require_once 'view/editcate.php';
        //     header('location: index.php?page=Comment');
        // }
    }

?>
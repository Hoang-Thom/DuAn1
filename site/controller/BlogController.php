<?php
    class BlogController {
        // Thuộc tính
        private $blogModel;

        // Khởi tạo
        public function __construct() {
            require_once('../model/BlogModel.php');
            $this->blogModel = new BlogModel();
        }

        // Tạo trang bài viết
        public function renderBlog() {
            $blog = $this->blogModel->getAllBlog();
            if (isset($_GET['id'])) {
                $id = $_GET['id']; // Gán ID
                $blogID = $this->blogModel->getBlogById($id);
            } else {
                echo "ID bài viết không hợp lệ.";
                return; // Dừng thực thi nếu không có ID
            }
            require_once('view/blog.php');
        }


    }
?>
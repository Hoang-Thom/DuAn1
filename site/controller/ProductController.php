<?php

    class ProductController {
        // thuộc tính
        private $productModel;
        private $categoryModel;
        private $blogModel;

        // khởi tạo
        public function __construct() {
            require_once('../site/model/ProductModel.php');
            $this->productModel = new ProductModel();
            require_once('../site/model/CategoryModel.php');
            $this->categoryModel = new CategoryModel();
            require_once('../site/model/BlogModel.php');
            $this->blogModel = new BlogModel();
        }

        // phương thức
        // tạo trang chủ
        public function renderHome() {
            $productsCate1= $this->productModel->getProNew();
            $productsCate2= $this->productModel->getProByCateLIMIT5(6);
            $blog4 = $this->blogModel->getLatestBlog();
            $blog1 = $this->blogModel->getOldestBlog();
            // $product = $this->productModel->getProductById($id);
            require_once('view/home.php');
        }
        // tạo trang sản phẩm
        public function renderShop($id) {
            // $products = $this->productModel->getAllProduct();  lấy tất cả sản phẩm
            $productsCake = $this->productModel->getProByCate(5);
            $productsPie = $this->productModel->getProByCate(6);
            $productsBread = $this->productModel->getProByCate(7);
            $productsTira = $this->productModel->getProByCate(8);
            $productsCup = $this->productModel->getProByCate(9);
            $productsPudding = $this->productModel->getProByCate(10);
            $productsChees = $this->productModel->getProByCate(11);
            $productsCook = $this->productModel->getProByCate(12);

            $categories = $this->categoryModel->getAllCategory();
            require_once('view/shop.php');
        }
        // tạo trang chi tiết sản phẩm
        public function renderDetail($id,$data) {
            $product= $this->productModel->getProductById($id);
            $relateProduct= $this->productModel-> getRelateProduct($id);
            $comments = $this->productModel->getCommentByProductId($id);
            $isLoggedIn = isset($_SESSION['user']);
            
            if (!empty($data)) {
                if (!$isLoggedIn) {
                    // Người dùng chưa đăng nhập
                    $_SESSION['message'] = "Vui lòng đăng nhập để gửi bình luận.";
                    header("Location: index.php?page=detail&id=$id");
                    exit;
                }
        
                // Nếu đã đăng nhập, xử lý bình luận
                $data['ID_nguoidung'] = $_SESSION['user']['ID_nguoidung'];

                // Kiểm tra nội dung bình luận
                if (empty($data['Noi_dung'])) {
                    $_SESSION['message'] = "Nội dung bình luận không được để trống.";
                    header("Location: index.php?page=detail&id=$id");
                    exit;
                }

                // Thêm ID_sanpham vào mảng dữ liệu
                $data['ID_sanpham'] = $id;

                // Khởi tạo giá trị Hinh_anh là NULL
                $data['Hinh_anh'] = null;

                if (!empty($_FILES['Hinh_anh']['name'])) {
                    $fileTmpPath = $_FILES['Hinh_anh']['tmp_name'];
                    $fileName = basename($_FILES['Hinh_anh']['name']);
                    $targetDir = "../public/img/";
                    $targetFilePath = $targetDir . $fileName;
                
                    // Kiểm tra nếu tệp đã được tải lên
                    if (is_uploaded_file($fileTmpPath)) {
                        // Di chuyển tệp vào thư mục đích
                        if (move_uploaded_file($fileTmpPath, $targetFilePath)) {
                            $data['Hinh_anh'] = $fileName;
                        } else {
                            $_SESSION['message'] = "Không thể tải lên hình ảnh.";
                            header("Location: index.php?page=detail&id=$id");
                            exit;
                        }
                    } else {
                        $_SESSION['message'] = "Tệp không được tải lên.";
                        header("Location: index.php?page=detail&id=$id");
                        exit;
                    }
                }
        
                // Thêm bình luận vào cơ sở dữ liệu
                $this->productModel->addComment($data);
                header("Location: index.php?page=detail&id=$id");
                exit();
            }
            
            require_once('view/detail.php');
        }
        // tạo trang hiển thị sản phẩm tìm kiếm
        public function renderSearch($search) {
            // Lấy thông tin tên sản phẩm từ cơ sở dữ liệu
            $productSearch = $this->productModel->getProBySreach($search);
            // print_r($search);
            require_once('view/search.php');
        }
        


    }


?>
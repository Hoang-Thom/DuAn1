<?php
ob_start();
    class CartController {
        // thuộc tính
        private $productModel;

        // khởi tạo
        public function __construct() {
            require_once('../model/ProductModel.php');
            $this->productModel = new ProductModel();
        }

        // phương thức
        // tạo trang giỏ hàng
        public function addCart($id, $quantity) {
            // Lấy sản phẩm từ model
            $product = $this->productModel->getProductById($id);
            
            // Kiểm tra xem giỏ hàng đã được khởi tạo chưa
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
            if (isset($_SESSION['cart'][$id])) {
                // Cập nhật số lượng nếu sản phẩm đã tồn tại
                $_SESSION['cart'][$id]['quantity'] += $quantity; // Cộng thêm số lượng
            } else {
                // Nếu sản phẩm chưa có, thêm mới vào giỏ hàng
                $product['quantity'] = $quantity; // Gán số lượng
                $_SESSION['cart'][$id] = $product; // Thêm sản phẩm vào giỏ hàng
            }

            // Kiểm tra giỏ hàng sau khi thêm sản phẩm
            print_r("<pre>");
            print_r($_SESSION['cart']);
            print_r("</pre>");
            // Chuyển đến trang giỏ hàng
            header("Location: index.php");
        }
        public function renderCart() {
            require_once('view/cart.php');
        }
        public function increaseQuantity($id) {
            $_SESSION['cart'][$id]['quantity'] +=1;
            header("Location: index.php?page=cart");
        }
        public function decreaseQuantity($id) {
            if($_SESSION['cart'][$id]['quantity']>1){
                $_SESSION['cart'][$id]['quantity'] --;
            }
            header("Location: index.php?page=cart");
        }
        public function deleteCart($id) {
            unset($_SESSION['cart'][$id]);
            header("Location: index.php?page=cart");
        }
    }

ob_end_flush(); 

?>
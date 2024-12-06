<?php

class CheckoutController {
    // thuộc tính
    private $checkoutModel;
    
    // Khởi tạo
    public function __construct() {
        require_once('../site/model/CheckoutModel.php');
        $this->checkoutModel = new CheckoutModel();
    }
    
    // Tạo trang checkout
    public function renderCheckout() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['thanhtoan'])) {
            // Kiểm tra xem người dùng đã đăng nhập chưa
            if (!isset($_SESSION['user']) || !isset($_SESSION['user']['ID_nguoidung'])) {
                echo "Bạn cần đăng nhập để thực hiện thanh toán.";
                exit;
            }

            // Lấy dữ liệu từ biểu mẫu
            $data = [
                'ID_nguoi_dung' => $_SESSION['user']['ID_nguoidung'], // Lấy từ biểu mẫu
                'address' => $_POST['address'] ?? '',
                'payment_method' => $_POST['pttt'] ?? '',
                'total' => $_POST['total'] ?? 0,
                'ID_khuyenmai' => $_POST['ID_khuyenmai'] ?? '',
            ];

            // Kiểm tra dữ liệu đầu vào
            $errors = [];
            if (empty($data['address'])) {
                $errors[] = "Địa chỉ không được để trống.";
            }
            if ($data['total'] <= 0) {
                $errors[] = "Tổng tiền không hợp lệ.";
            }

            // Nếu có lỗi, hiển thị thông báo lỗi
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<p style='color: red;'>$error</p>";
                }
            } else {
                // Bước 2: Thêm đơn hàng vào cơ sở dữ liệu
                $orderId=$this->checkoutModel->addOrder($data);

                // Chuyển hướng đến trang xác nhận
                header("Location: ?page=pay&orderID=".$orderId);
                exit;
            }
        } else {
            include('view/checkout.php');
        }
    }

    // Xác nhận đơn hàng
    public function renderPay($id) {
        // $donHang = $this->getAlldonhang($id);
        // if($donHang){
        //     $_SESSION['donhang'] = $donHang;
        // }
        $orderdetail = $this->checkoutModel->getOrderDetail($id);
        $order = $this->checkoutModel->getOrder($id);
        
        // print_r($orderdetail);
        // print_r($order);
        require_once('view/pay.php');

        
    }
}

?>
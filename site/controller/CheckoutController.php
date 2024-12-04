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
        // Kiểm tra xem có dữ liệu POST từ biểu mẫu không
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['thanhtoan'])) {
            // Lấy dữ liệu từ biểu mẫu
            $data = [
                'ID_nd' => $_POST['ID_nguoidung'],
                'name' => $_POST['name'] ?? '',
                'email' => $_POST['email'] ?? '',
                'phone' => $_POST['phone'] ?? '',
                'address' => $_POST['address'] ?? '',
                'payment_method' => $_POST['pttt'] ?? '',
                'total' => $_POST['total'] ?? 0 // Tổng tiền có thể tính toán trong biểu mẫu
            ];
    
            // Kiểm tra dữ liệu đầu vào
            $errors = [];
            if (empty($data['name'])) {
                $errors[] = "Tên không được để trống.";
            }
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email không hợp lệ.";
            }
            if (empty($data['phone'])) {
                $errors[] = "Số điện thoại không được để trống.";
            }
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
                $this->checkoutModel->addOrder($data); // Gọi phương thức thêm đơn hàng
    
                // Chuyển hướng đến trang xác nhận
                header("Location: ?page=pay");
                exit;
            }
        } else {
            // Hiển thị biểu mẫu thanh toán nếu chưa gửi
            // Đây là nơi bạn có thể gọi một phương thức để hiển thị biểu mẫu nếu cần
            include('view/checkout.php'); // Giả sử bạn có file checkout.php để hiển thị
        }
    }
}

?>
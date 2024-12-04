<?php

    require_once('Database.php');
    class CheckoutModel {

        public function addOrder($data) {
            // Bước 1: Thêm đơn hàng vào bảng don_hang
            $sql = "INSERT INTO don_hang (ID_nguoidung, Ngay_dat_hang, Tong_tien, Trang_thai, Dia_chi_giao_hang, Phuong_thuc_thanh_toan, ) VALUES (?, NOW(), ?, ?, ?, ?, ?)";
            $params = array_values($data);
            
            // Thực hiện lệnh chèn đơn hàng
            Database::getInstance()->execute($sql, $params);
            
            // Lấy ID đơn hàng vừa được thêm
            $orderId = Database::getInstance()->getLastInsertId(); // Cần thêm hàm này trong class Database
    
            // Bước 2: Thêm chi tiết đơn hàng vào bảng donhang_ch
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $id => $item) {
                    $sql = "INSERT INTO donhang_ch (amount, order_id, product_id) VALUES (?, ?, ?)";
                    $params = [$item['price'], $orderId, $id];
                    Database::getInstance()->execute($sql, $params);
                }
                // Huỷ giỏ hàng
                unset($_SESSION['cart']);
            }
        }

    }

?>
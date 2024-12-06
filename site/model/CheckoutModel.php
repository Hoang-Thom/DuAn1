<?php

    require_once('Database.php');
    class CheckoutModel {

        public function addOrder($data) {
            // Bước 1: Thêm đơn hàng vào bảng don_hang
            $sql = "INSERT INTO don_hang (ID_nguoi_dung, Tong_tien, Dia_chi_giao_hang, Phuong_thuc_thanh_toan, ID_khuyenmai) VALUES (?, ?, ?, ?, ?)";
            
            // Cần đảm bảo rằng $params chứa tất cả các giá trị cần thiết
            $params = [
                $data['ID_nguoi_dung'],
                $data['total'],
                $data['address'],
                $data['payment_method'],
                $data['ID_khuyenmai'] // ID khuyến mãi
            ];
            
            // Thực hiện lệnh chèn đơn hàng
            Database::getInstance()->execute($sql, $params);
            
            // Lấy ID đơn hàng vừa được thêm
            $orderId = Database::getInstance()->getLastInsertId(); // Cần thêm hàm này trong class Database

            // Bước 2: Thêm chi tiết đơn hàng vào bảng donhang_ch
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $id => $item) {
                    // Tính tổng tiền cho từng sản phẩm
                    $itemTotal = $item['Gia_san_pham'] * $item['quantity'];
                    
                    // Thêm chi tiết đơn hàng
                    $sql = "INSERT INTO donhang_ch (ID_donhang, ID_sanpham, So_luong, Tong_tien) VALUES (?, ?, ?, ?)";
                    $params = [$orderId, $id, $item['quantity'], $itemTotal];
                    Database::getInstance()->execute($sql, $params);
                    
                    // Cập nhật số lượng sản phẩm trong bảng sanpham
                    $sqlUpdate = "UPDATE sanpham SET So_luong = So_luong - ? WHERE ID_sanpham = ?";
                    $updateParams = [$item['quantity'], $id];
                    Database::getInstance()->execute($sqlUpdate, $updateParams);

                }
                // Huỷ giỏ hàng
                unset($_SESSION['cart']);
            }
            return $orderId;
        }

        // // Hàm lấy thông tin đơn hàng
        public function getOrderDetail($id){
            $sql = "SELECT * FROM donhang_ch INNER JOIN sanpham ON donhang_ch.ID_sanpham = sanpham.ID_sanpham WHERE ID_donhang= $id";
            return Database::getInstance()->getAll($sql);
        }

        public function getOrder($id){
            $sql = "SELECT * FROM don_hang INNER JOIN khuyen_mai ON don_hang.ID_khuyenmai = khuyen_mai.ID_khuyenmai WHERE ID_donhang = $id";
            return Database::getInstance()->getOne($sql);
        }

         
    }

?>
<main>
    <div class="checkout-container">
        <form action="" method="post">
            <div class="info-order">
                <div class="info-order-1">
                    <h1>Thông tin giao hàng</h1>
                    <p>Bạn đã có tài khoản? <a href="index.php?page=loginpage">Đăng nhập</a></p>
                        <input type="hidden" name="ID_nguoi_dung" value="<?=  $_SESSION['user']['ID_nguoidung'] ?>">
                        <input type="text" name="name" value="<?= $_SESSION['user']['Ten_nguoidung'] ?>" placeholder="Họ và tên">
                        <div class="form-info">
                            <input class="form-email" type="text" name="email" value="<?= $_SESSION['user']['Email'] ?>" placeholder="Email">
                            <input class="form-sdt" type="text" name="phone" value="<?= $_SESSION['user']['So_dien_thoai'] ?>" placeholder="Số điện thoại">
                        </div>
                        <input type="text" name="address" value="<?= $_SESSION['user']['Dia_chi'] ?>" placeholder="Địa chỉ">
                        <!-- <textarea class="" type="text" placeholder="Ghi chú"></textarea> -->
                </div>
                <div class="info-order-2">
                    <h1>Phương thức thanh toán</h1>
                    <div class="info-order-check"><input type="radio" value="1" name="pttt" checked> Thanh toán khi nhận hàng</div>
                    <div class="info-order-check"><input type="radio" value="2" name="pttt"> Thanh toán qua Momo</div>
                    <div class="info-order-check"><input type="radio" value="3" name="pttt"> Thanh toán qua ví VNPay</div>
                </div>
            </div>
            <div class="info-pro">
                <section class="cart">
                    <h1>Đơn Hàng Của Tôi</h1>
                    <table>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Thành Tiền</th>
                        </tr>

                        <?php 
                            // Kết nối cơ sở dữ liệu
                            $conn = new mysqli('localhost', 'root', '', 'cake'); // Thay đổi thông tin kết nối nếu cần
                            if ($conn->connect_error) {
                                die("Kết nối thất bại: " . $conn->connect_error);
                            }

                            // Khởi tạo tổng tiền
                            $tong_tien = 0;

                            // Giả sử có một giỏ hàng trong session
                            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $p) { 
                                    $itemTotal = $p['quantity'] * $p['Gia_san_pham']; // Tính thành tiền cho từng sản phẩm
                                    $tong_tien += $itemTotal; // Cộng vào tổng tiền
                        ?>
                                    <tr>
                                        <td><img src="../public/img/<?=$p['Anh_san_pham']?>" alt="<?=$p['Ten_san_pham']?>"></td>
                                        <td><?=$p['Ten_san_pham']?></td>
                                        <td><?=number_format($p['Gia_san_pham'], 0, ',', '.')?></td>
                                        <td>
                                            <div class="pro-quantity-input">
                                                <input type="text" class="quantity-input" value="<?=$p['quantity']?>" min="1" max="5">
                                            </div>
                                        </td>
                                        <td><?= number_format($itemTotal, 0, ',', '.') . ' VNĐ'?></td>
                                    </tr>
                        <?php 
                                } 
                            }

                            // Biến giảm giá và xử lý mã giảm giá
                            $ma_giam = isset($_POST['ma_giam']) ? $_POST['ma_giam'] : null;
                            $giam_gia = 0;
                            $id_khuyenmai = null;

                            if ($ma_giam) {
                                // Kiểm tra mã giảm giá
                                $sql = "SELECT * FROM khuyen_mai WHERE Ma_giam = ? 
                                        AND Ngay_bat_dau <= CURDATE() AND Ngay_ket_thuc >= CURDATE() AND So_luong > 0";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("s", $ma_giam); // Bảo vệ chống SQL Injection
                                $stmt->execute();
                                $result = $stmt->get_result();

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $giam_gia = $tong_tien * ($row['Phan_tram_giam'] / 100); // Tính giảm giá
                                    $tong_tien -= $giam_gia; // Tổng tiền sau giảm giá
                                    $id_khuyenmai = $row['ID_khuyenmai']; // Lấy ID_khuyenmai

                                    // Cập nhật số lượng mã giảm giá
                                    $update = "UPDATE khuyen_mai SET So_luong = So_luong - 1 WHERE Ma_giam = ?";
                                    $updateStmt = $conn->prepare($update);
                                    $updateStmt->bind_param("s", $ma_giam);
                                    $updateStmt->execute();
                                } else {
                                    echo "<p style='color: red;'>Mã giảm giá không hợp lệ hoặc đã hết hạn!</p>";
                                }
                            }

                            // Đóng kết nối
                            $conn->close();
                        ?>
                    
                    </table>

                    

                    <form method="POST">
                        <label for="ma_giam">Mã giảm giá:</label>
                        <input type="text" id="ma_giam" name="ma_giam" placeholder="Nhập mã giảm giá">
                        <button type="submit">Áp dụng</button>
                    </form>

                    <p>Giảm giá: <?= number_format($giam_gia, 0, ',', '.') ?> VNĐ</p>

                    <div class="cart-total">
                        <div class="total">
                            <p>Tổng tiền: 
                                <span>
                                    <?=number_format($tong_tien, 0, ',', '.') . ' VNĐ'?>
                                </span>
                            </p>
                            <input type="hidden" name="ID_khuyenmai" value="<?= $id_khuyenmai ?>">
                            <input type="hidden" name="total" value="<?=$tong_tien?>">
                            <input type="submit" class="muaNgay" value="Thanh toán" name="thanhtoan">
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>
</main>
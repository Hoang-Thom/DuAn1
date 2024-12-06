    <main class="main-userProfile">
        <div class="container">
            <div class="box-left">
                <div class="title">Thông tin tài khoản</div>
                <div class="main-menu">
                    <a href="#" class="menu-item">
                        Tài khoản của tôi
                        <span>&gt;</span>
                    </a>
                    <a href="#" class="menu-item">
                        Lịch sử mua hàng
                        <span>&gt;</span>
                    </a>
                    <a href="#" class="menu-item">
                        Đổi mật khẩu
                        <span>&gt;</span>
                    </a>
                    <a href="#" class="menu-item">
                        Thông tin cá nhân
                        <span>&gt;</span>
                    </a>

                    <?php if(isset($_SESSION['user'])) { ?>
                        <a href="?page=logout" class="menu-item">
                            Đăng xuất
                            <span>&gt;</span>
                        </a>
                    <?php } ?>
                    
                </div>
            </div>
            <div id="my-account" class="box-right">
                <div class="profile">
                    <div class="sub-title">Tài khoản của tôi</div>
                    <div>
                        <p>
                            <span class="black-text">Tên tài khoản:</span>
                            <span class="green-text">
                                <?php if(isset($_SESSION['user'])) { ?>
                                    <?= $_SESSION['user']['Ten_nguoidung']?>
                                <?php } ?>
                            </span>
                        </p>
                        <p>
                            <span class="black-text">Điện thoại:</span>
                            <span class="green-text">
                                <?php if(isset($_SESSION['user'])) { ?>
                                    <?= $_SESSION['user']['So_dien_thoai']?>
                                <?php } ?>
                            </span>
                        </p>
                        <p>
                            <span class="black-text">Email:</span>
                            <span class="green-text">
                                <?php if(isset($_SESSION['user'])) { ?>
                                    <?= $_SESSION['user']['Email']?>
                                <?php } ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div id="order-history" class="box-right" style="display: none;">
                <div class="profile">
                    <div class="sub-title">Lịch sử mua hàng</div>
                    <table>
                        <tr>
                            <th>Đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Giao đến</th>
                            <th>Tình trạng thanh toán</th>
                            <th>Hành động</th>
                        </tr>

                        <!-- <?php foreach ( $orderUser as $o) { ?> -->

                        <tr>
                            <td>1</td>
                            <td>30/10/2024 22:32</td>
                            <td>Quận 12</td>
                            <td>Chưa thanh toán</td>
                            <td><a href="#" style="color: #303030">Xem</a></td>
                        </tr>

                        <!-- <?php } ?> -->
                         
                        <tr>
                            <td>
                                <h1></h1>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="change-password" class="box-right" style="display: none;">
                <div class="profile">
                    <div class="sub-title">Đổi mật khẩu</div>
                        <form class="form" action="" method="post">
                            <div class="information">
                                <div class="content">
                                    <label class="label">Mật khẩu cũ:</label>
                                    <input type="password" id="oldPassword" class="name-box" placeholder="Nhập mật khẩu cũ">
                                </div>

                                <div class="content">
                                    <label class="label">Mật khẩu mới:</label>
                                    <input type="password" id="newPassword" class="name-box" placeholder="Nhập mật khẩu mới">
                                </div>

                                <div class="content">
                                    <label class="label">Nhập lại mật khẩu mới:</label>
                                    <input type="password" id="confirmPassword" class="name-box" placeholder="Nhập lại mật khẩu mới">
                                </div>
                            </div>
                            <button type="submit" id="updatePasswordBtn" class="buy-btn">Cập nhật</button>
                        </form>
                    </div>
                </div>

            
            <?php
                // Kiểm tra nếu người dùng chưa đăng nhập
                if (!isset($_SESSION['user']) || empty($_SESSION['user']['ID_nguoidung'])) {
                    echo "Bạn cần đăng nhập trước.";
                    exit;
                }
                
                // Lấy thông tin người dùng từ session
                $user = $_SESSION['user'];

                // Xử lý khi cập nhật thông tin
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
                    // Lấy dữ liệu từ form
                    $name = $_POST['name'] ?? '';
                    $phone = $_POST['phone'] ?? '';
                    $email = $_POST['email'] ?? '';
                    $address = $_POST['address'] ?? '';

                // Lấy ID người dùng từ session
                $userId = $user['ID_nguoidung'];

                // Kết nối database
                $conn = new mysqli("localhost", "root", "", "cake"); // Thay "cake" bằng tên database của bạn
                    if ($conn->connect_error) {
                        die("Kết nối thất bại: " . $conn->connect_error);
                    }

                // Cập nhật thông tin trong cơ sở dữ liệu
                $sql = "UPDATE nguoidung SET Ten_nguoidung = ?, So_dien_thoai = ?, Email = ?, Dia_chi = ? WHERE ID_nguoidung = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssi", $name, $phone, $email, $address, $userId);

                if ($stmt->execute()) {

                    if ($stmt->execute()) {
                        // Cập nhật lại thông tin trong session
                        $_SESSION['user']['Ten_nguoidung'] = $name;
                        $_SESSION['user']['So_dien_thoai'] = $phone;
                        $_SESSION['user']['Email'] = $email;
                        $_SESSION['user']['Dia_chi'] = $address;
                    
                        // Redirect để làm mới giao diện
                        header('Location: ' . $_SERVER['PHP_SELF'] . '?page=User_profile');
                        exit;
                    }
                    
                    // Đồng bộ lại $user
                    $user = $_SESSION['user'];
                } else {
                    echo "Lỗi: " . $stmt->error;
                }
                    $stmt->close();
                    $conn->close();
                }
            ?>
        
            <div id="personal-info" class="box-right" style="display: none;">
                <div class="profile">
                    <div class="sub-title">Thông tin cá nhân</div>
                        <form  class="form" method="POST" action="">
                            <div class="information">
                                <div class="content">
                                    <label class="label" for="name">Họ và Tên:</label>
                                    <input class="name-box" type="text" id="name" name="name" value="<?= htmlspecialchars($user['Ten_nguoidung'] ?? ''); ?>" required />
                                </div>

                                <div class="content">
                                    <label class="label" for="phone">Số Điện Thoại:</label>
                                    <input class="name-box" type="text" id="phone" name="phone" value="<?= htmlspecialchars($user['So_dien_thoai'] ?? ''); ?>" required />
                                </div>

                                <div class="content">
                                    <label class="label" for="email">Email:</label>
                                    <input class="name-box" type="email" id="email" name="email" value="<?= htmlspecialchars($user['Email'] ?? ''); ?>" required />
                                </div>

                                <div class="content">
                                    <label class="label" for="address">Địa Chỉ:</label>
                                    <input class="name-box" type="text" id="address" name="address" value="<?= htmlspecialchars($user['Dia_chi'] ?? ''); ?>" required />
                                </div>
                            </div>
                            <button type="submit" name="update" class="buy-btn">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
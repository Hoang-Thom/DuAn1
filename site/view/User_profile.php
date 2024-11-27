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
                    <div class="sub-title">Lịch sử mua Hoàng</div>
                    <table>
                        <tr>
                            <th>Đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Giao đến</th>
                            <th>Tình trạng thanh toán</th>
                            <th>Hành động</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>30/10/2024 22:32</td>
                            <td>Quận 12</td>
                            <td>Chưa thanh toán</td>
                            <td><a href="#" style="color: #303030">Xem</a></td>
                        </tr>
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
                                    <div class="label">Mật khẩu cũ:</div>
                                    <input type="password" id="oldPassword" class="name-box" placeholder="Nhập mật khẩu cũ">
                                </div>

                                <div class="content">
                                    <div class="label">Mật khẩu mới:</div>
                                    <input type="password" id="newPassword" class="name-box" placeholder="Nhập mật khẩu mới">
                                </div>

                                <div class="content">
                                    <div class="label">Nhập lại mật khẩu mới:</div>
                                    <input type="password" id="confirmPassword" class="name-box"
                                        placeholder="Nhập lại mật khẩu mới">
                                </div>
                            </div>
                            <button id="updatePasswordBtn" class="buy-btn">Cập nhật</button>
                        </form>
                </div>
            </div>
            <?php
                if(isset($_SESSION['user'])) {
                    $name = $_SESSION['user']['Ten_nguoidung'];
                    $email = $_SESSION['user']['Email'];
                    $phone = $_SESSION['user']['So_dien_thoai'];
                    $address = $_SESSION['user']['Dia_chi'];
                } else{
                    $name = '';
                    $email = '';
                    $phone = '';
                    $address = '';
                }
            ?>
            <div id="personal-info" class="box-right" style="display: none;">
                <div class="profile">
                    <div class="sub-title">Thông tin cá nhân</div>
                    <form class="form" action="" method="post">
                        <div class="information">
                            <div class="content">
                                <div class="label">Họ và Tên:</div>
                                <input type="text" name="Ten_nguoidung" class="name-box" value="<?= $name ?>" placeholder="Nhập họ và tên">
                            </div>

                            <div class="content">
                                <div class="label">Điện thoại:</div>
                                <input type="text" name="So_dien_thoai" class="name-box" value="<?= $phone ?>" placeholder="Nhập số điện thoại">
                            </div>
                            
                            <div class="content">
                                <div class="label">Email:</div>
                                <input type="text" name="Email" class="name-box" value="<?= $email ?>" placeholder="Nhập email">
                            </div>

                            <div class="content">
                                <div class="label">Địa chỉ:</div>
                                <input type="text" name="Dia_chi" class="name-box" value="<?= $address ?>" placeholder="Nhập địa chỉ">
                            </div>
                            
                        </div>
                        <button type="submit" id="updateinfo" class="buy-btn">Cập nhật</button>
                    </form>
                    <!-- <a href="#" class="buy-btn">Cập nhật</a> -->
                </div>
            </div>



        </div>
    </main>
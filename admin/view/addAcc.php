<?php
require_once('../model/AccountModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tenNguoiDung = $_POST['tennguoidung'];
    $soDienThoai = $_POST['sodienthoai'];
    $matKhau = $_POST['matkhau'];
    $email = $_POST['email'];
    $vaiTro = $_POST['Vai_tro'];

    $accountModel = new AccountModel();

    // Kiểm tra sự tồn tại của tên người dùng, số điện thoại và email
    $allAccounts = $accountModel->getAllAccount();
    $errors = [];

    foreach ($allAccounts as $account) {
        if ($account['Ten_nguoidung'] === $tenNguoiDung) {
            $errors['tennguoidung'] = "Tên người dùng đã tồn tại. Vui lòng nhập lại.";
        }
        if ($account['So_dien_thoai'] === $soDienThoai) {
            $errors['sodienthoai'] = "Số điện thoại đã tồn tại. Vui lòng nhập 
            lại.";
        }
        if ($account['Email'] === $email) {
            $errors['email'] = "Email đã tồn tại. Vui lòng nhập lại.";
        }
    }

    // Kiểm tra độ dài mật khẩu
    if (strlen($matKhau) < 6) {
        $errors['matkhau'] = "Mật khẩu phải có ít nhất 6 ký tự.";
    }

    // Nếu có lỗi, hiển thị lại form với thông báo lỗi
    if (!empty($errors)) {
        // Giữ lại giá trị nhập
        $formData = [
            'tennguoidung' => $tenNguoiDung,
            'sodienthoai' => $soDienThoai,
            'email' => $email
        ];
    } else {
        // Thêm tài khoản mới nếu không có lỗi
        $data = [
            'Ten_nguoidung' => $tenNguoiDung,
            'Mat_khau' => password_hash($matKhau, PASSWORD_BCRYPT),
            'So_dien_thoai' => $soDienThoai,
            'Email' => $email,
            'Vai_tro' => $vaiTro
        ];

        $accountModel->addAccount($data);
        echo "<script>alert('Thêm tài khoản thành công!'); window.location.href = '?page=Account';</script>";
        exit;
    }
}

// Đảm bảo các biến được định nghĩa nếu chưa có
$formData = $formData ?? ['tennguoidung' => '', 'sodienthoai' => '', 'email' => ''];
$errors = $errors ?? [];
?>

<main>
    <div class="login-box">
        <h2>Thêm Tài Khoản Admin</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Tên" name="tennguoidung" value="<?php echo htmlspecialchars($formData['tennguoidung']); ?>" required>
            <?php if (!empty($errors['tennguoidung'])): ?>
                <p class="error" style="color: red; font-size: 16px;">
                    <?php echo $errors['tennguoidung']; ?>
                </p>
            <?php endif; ?>

            <input type="text" placeholder="Điện Thoại" name="sodienthoai" value="<?php echo htmlspecialchars($formData['sodienthoai']); ?>" required>
            <?php if (!empty($errors['sodienthoai'])): ?>
                <p class="error" style="color: red; font-size: 16px;">
                    <?php echo $errors['sodienthoai']; ?>
                </p>
            <?php endif; ?>

            <input type="password" placeholder="Mật khẩu" name="matkhau" required>
            <?php if (!empty($errors['matkhau'])): ?>
                <p class="error" style="color: red; margin: 0px; font-size: 16px;">
                    <?php echo $errors['matkhau']; ?>
                </p>
            <?php endif; ?>

            <input type="email" placeholder="Email" name="email" value="<?php echo htmlspecialchars($formData['email']); ?>" required>
            <?php if (!empty($errors['email'])): ?>
                <p class="error" style="color: red; font-size: 16px;">
                    <?php echo $errors['email']; ?>
                </p>
            <?php endif; ?>

            <input type="number" value="1" name="Vai_tro" required>

            <button type="submit">Thêm</button>
        </form>
    </div>
</main>

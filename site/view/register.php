<main class="main-register">
        <div class="register-box">
            <h2>Đăng ký</h2>
            <?php if (!empty($message2)): ?>
                <div class="alert"><?php echo $message2; ?></div>
                <?php endif; ?>
            <form action="index.php?page=register" method="post">
                <input type="text"name="Ten_nguoidung" placeholder="Tên" required>
                <input type="text" name="So_dien_thoai" placeholder="Điện thoại" required>
                <input type="email" name="Email" placeholder="Email" required>
                <input type="password" name="Mat_khau" placeholder="Mật khẩu" required>
                <input type="text" name="Dia_chi" placeholder="Địa chỉ" required>
                <button type="submit">Đăng ký</button>
            </form>
        </div>
    </main>
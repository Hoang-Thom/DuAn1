  


 <main class="main-login">
        <div class="login-box">
            <h2>Đăng nhập</h2>
            <?php if (!empty($message)): ?>
                <div class="alert"><?php echo $message; ?></div>
                <?php endif; ?>
            <form action="index.php?page=login" method="post">
                <input type="email" name="Email" placeholder="Email" required>
                <input type="password" name="Mat_khau" placeholder="Password" required>
                <div class="links">
                    <a href="index.php?page=register">Đăng ký</a>
                    <a href="index.php?page=forget">Quên mật khẩu?</a>
                </div>
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
    </main>






   
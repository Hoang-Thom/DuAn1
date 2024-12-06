
<main>
        <div class="login-box">
            <h2>Sửa Tài Khoản</h2>
            <form action="?page=editAcc&id=<?=$Account['ID_nguoidung']?>" method="post" enctype="multipart/form-data">
                <input type="text" name="tennguoidung" value="<?=$Account['Ten_nguoidung']?>" placeholder="Tên" required>
                <input type="text" name="sodienthoai" value="<?=$Account['So_dien_thoai']?>" placeholder="Điện Thoại" required>
                <input type="text" name="matkhau" value="<?=$Account['Mat_khau']?>" placeholder="Mật khẩu" required>
                <input type="email" name="email" value="<?=$Account['Email']?>" placeholder="Email" required>
                <button type="submit ">Cập nhật</button>
            </form>
        </div>
    </main>
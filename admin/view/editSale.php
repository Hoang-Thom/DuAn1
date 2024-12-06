<main>
        <div class="login-box">
            <h2>Sửa Khuyến Mãi</h2>
            <form action="?page=editSale&id=<?=$Sale['ID_khuyenmai']?>" method="post" enctype="multipart/form-data">
                <input type="number" placeholder="Phần trăm giảm" name="phantramgiam" value="<?=$Sale['Phan_tram_giam']?>" required>
                <input type="text" placeholder="Điều kiện" name="dieukien" value="<?=$Sale['Dieu_kien_ap_dung']?>" required>
                <input type="date" placeholder="Ngày bắt đầu" name="ngaybatdau" value="<?=$Sale['Ngay_bat_dau']?>" required>
                <input type="date" placeholder="Ngày kết thúc" name="ngayketthuc" value="<?=$Sale['Ngay_ket_thuc']?>" required>
                <input type="text" placeholder="Mã giảm" name="magiam" value="<?=$Sale['Ma_giam']?>" require>
                <input type="number" placeholder="Số lượng" name="soluong" value="<?=$Sale['So_luong']?>" require>
                <button type="submit ">Cập nhật</button>
            </form>
        </div>
    </main>
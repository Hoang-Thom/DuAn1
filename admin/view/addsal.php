<main>
        <div class="login-box">
            <h2>Thêm mã khuyến mãi</h2>
            <form action="?page=addSale" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Phần trăm giảm" name="phantramgiam" required>
            <input type="text" class="mota" name="dieukien" placeholder="Điều kiện" require>
                <label for="">Ngày bắt đầu</label>
                <input type="date" name="ngaybatdau" id="" require>
                <label for="">Ngày kết thúc</label>
                <input type="date" name="ngayketthuc" id="" require>
                <input type="text" placeholder="Mã giảm" name="magiam" required>
                <input type="number" name="soluong" placeholder="Số lượng"  required>
                <a href="?page=Sale"><button type="submit">Thêm</button></a>
            </form>
        </div>
</main>
<main>
        <section class="row-1">
        <?php foreach($CTDHs as $key=>$value) { ?>            
            <h1>Thông tin đơn hàng <?=$value['ID_donhang']?> </h1>
            <?php } ?>
            <p>Ngày đặt: 30/10/2024 22:00</p>
            <div class="col-left">
                <h2>Thông tin giao hàng</h2>
                <p>Người đặt: Hoàng Nho Thơm</p>
                <p>Điện thoại: 0838934160</p>
                <p>Trạng thái thanh toán: Chưa thanh toán</p>
                <p>Hình thức thanh toán: Ship COD</p>
            </div>

            <div class="col-right">
                <h2>Địa chỉ giao hàng</h2>
                <p>Tỉnh/ thành phố: TP HCM</p>
                <p>Quận/ huyện: quận 12</p>
                <p>Phường/ xã: Phường trung mỹ tây</p>
                <p>Địa chỉ: Tô ký, Khu phố 2</p>
            </div>
        </section>
        <table>
            <thead>
                <td>Ảnh</td>
                <td>Tên Sản Phẩm</td>
                <td>Giá</td>
                <td>Số Lượng</td>
                <td>Tổng</td>
            </thead>
            <tbody>
                <td>
                    <img src="../public/img/tarset-6.png" width="200px" height="130px" alt=" "></td>
                <td>Set 6 Tart Mini</td>
                <td>200 000 VNĐ</td>
                <td>1</td>
                <td>200 000 VNĐ</td>
            </tbody>
        </table>
        <h4>Giảm 30% trên tổng đơn hàng</h4>
        <h3 style="float: right;">Tổng: <del>200 000 VNĐ</del> 150 000 VND</h3>
        

    </main>
<main>
    <section class="row-1">
        <h1>Thông tin đơn hàng <?=$CTDHs['ID_donhang']?></h1>
        <p>Ngày đặt: <?=$donhang['Ngay_dat_hang']?></p>
        <div class="col-left">
            <h2>Thông tin giao hàng</h2>
            <p>Người đặt: <?=$donhang['Ten_nguoidung']?></p>
            <p>Điện thoại: <?=$donhang['So_dien_thoai']?></p>
            <p>Trạng thái thanh toán: Chưa thanh toán</p>
            <p>Hình thức thanh toán: thanh toán khi nhận hàng</p>
        </div>

        <div class="col-right">
            <h2>Địa chỉ giao hàng</h2>
            <p><?=$donhang['Dia_chi_giao_hang']?></p>
           
        </div>
    </section>
    <table>
        <thead>
            <tr>
                <td>Ảnh</td>
                <td>Tên Sản Phẩm</td>
                <td>Giá</td>
                <td>Số Lượng</td>
                <td>Tổng</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="../public/img/<?=$CTDHs['Anh_san_pham']?>" width="200px" height="130px" alt=" ">
                </td>
                <td><?=$CTDHs['Ten_san_pham']?></td>
                <td><?=number_format($CTDHs['Gia_san_pham'],0,',','.'). ' VND';?></td>
                <td><?=$CTDHs['So_luong']?></td>
                <td><?=number_format($CTDHs['Tong_tien'],0,',','.'). ' VND';?></td>
            </tr>
        </tbody>
    </table>
    <h4>Giảm <?=$donhang['Phan_tram_giam'].' %'; ?> trên tổng đơn hàng</h4>
    <h3 style="float: right;">Tổng: <del><?=number_format($CTDHs['Tong_tien'],0,',','.'). ' VND';?></del> <?=number_format($donhang['Tong_tien'],0,',','.'). ' VND';?></h3>
</main>
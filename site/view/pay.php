    <main>
        <form action="" method="get">
            <div class="order-details-container">
                <h2>Xác nhận đơn hàng thành công</h2>
                <p>Ngày đặt hàng: <?= $order['Ngay_dat_hang'] ?></p>
            </div>
            <div class="order-details">
                <div class="customer-info">
                    <p class="order"><strong class="customer-info-col">Mã đơn hàng:</strong> 1</p>
                    <p><strong class="customer-info-color">Tên tài khoản:</strong> <?= $_SESSION['user']['Ten_nguoidung'] ?> </p>
                    <p><strong class="customer-info-color">Điện thoại:</strong> <?= $_SESSION['user']['So_dien_thoai'] ?> </p>
                    <p><strong class="customer-info-color">Email:</strong> <?= $_SESSION['user']['Email'] ?> </p>
                    <p><strong class="customer-info-color">Địa chỉ:</strong> <?= $order['Dia_chi_giao_hang'] ?> </p>
                </div>
                <div class="order-summary">
                    <h3 class="customer-info-col">Chi tiết đơn hàng</h3>

                    <?php foreach ($orderdetail as $o) { ?>

                        <div class="order-item">
                            <div class="order-item-name">
                                <div class="image-quantity">
                                    <p>1</p><img src="../public/img/<?=$o['Anh_san_pham']?>" alt="Set 6 Tart Mini">
                                </div>
                                <p><?=$o['Ten_san_pham']?></p>
                            </div>
                            <strong><?=$o['Gia_san_pham']?></strong>
                        </div>

                    <?php } ?>

                    <div class="order-item-price">
                        <div class="order-item-price-col">
                            <strong>Tạm tính:</strong>
                            <p>200,000 VNĐ</p>
                        </div>
                        <div class="order-item-price-col">
                            <strong>Mã giảm giá:</strong>
                            <p> <?= $order['Ma_giam'] ?></p>
                        </div>
                        <div class="order-item-price-col">
                            <strong>Phí vận chuyển:</strong>
                            <p>0</p>
                        </div>
                    </div>
                    <div class="order-item-price-cols">
                        <strong>Tổng cộng:</strong>
                        <p><?=number_format($order['Tong_tien'], 0, ',', '.') . ' VNĐ'?></p>
                        
                    </div>
                    <p>
                        <strong class="customer-info-col">Phương thức thanh toán </strong> <br></br> 
                        Thanh toán khi nhận hàng
                    </p>
                </div>
            </div>
        </form>
    </main>
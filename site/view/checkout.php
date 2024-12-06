<main>
    <div class="checkout-container">
        <form action="" method="post">
            <div class="info-order">
                <div class="info-order-1">
                    <h1>Thông tin giao hàng</h1>
                    <p>Bạn đã có tài khoản? <a href="index.php?page=loginpage">Đăng nhập</a></p>
                        <input type="hidden" name="ID_nguoi_dung" value="<?=  $_SESSION['user']['ID_nguoidung'] ?>">
                        <input type="text" name="name" value="<?= $_SESSION['user']['Ten_nguoidung'] ?>" placeholder="Họ và tên">
                        <div class="form-info">
                            <input class="form-email" type="text" name="email" value="<?= $_SESSION['user']['Email'] ?>" placeholder="Email">
                            <input class="form-sdt" type="text" name="phone" value="<?= $_SESSION['user']['So_dien_thoai'] ?>" placeholder="Số điện thoại">
                        </div>
                        <input type="text" name="address" value="<?= $_SESSION['user']['Dia_chi'] ?>" placeholder="Địa chỉ">
                        <!-- <textarea class="" type="text" placeholder="Ghi chú"></textarea> -->
                </div>
                <div class="info-order-2">
                    <h1>Phương thức thanh toán</h1>
                    <div class="info-order-check"><input type="radio" value="1" name="pttt" checked> Thanh toán khi nhận hàng</div>
                    <div class="info-order-check"><input type="radio" value="2" name="pttt"> Thanh toán qua Momo</div>
                    <div class="info-order-check"><input type="radio" value="3" name="pttt"> Thanh toán qua ví VNPay</div>
                </div>
            </div>
            <div class="info-pro">
                <section class="cart">
                    <h1>Đơn Hàng Của Tôi</h1>
                    <table>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Thành Tiền</th>
                        </tr>

                        <?php 
                            $total = 0;
                            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                foreach($_SESSION['cart'] as $p) { 
                                    $itemTotal = $p['quantity'] * $p['Gia_san_pham']; // Tính thành tiền cho từng sản phẩm
                                    $total += $itemTotal; // Cộng vào tổng tiền
                        ?>
                            <tr>
                                <td><img src="../public/img/<?=$p['Anh_san_pham']?>" alt="Set 6 Tart Mini"></td>
                                <td><?=$p['Ten_san_pham']?></td>
                                <td><?=number_format($p['Gia_san_pham'], 0, ',', '.')?></td>
                                <td>
                                    <div class="pro-quantity-input">
                                        <input type="text" class="quantity-input" value="<?=$p['quantity']?>" min="1" max="5">
                                    </div>
                                </td>
                                <td>
                                    <?= number_format($itemTotal, 0, ',', '.') . ' VNĐ'?>
                                </td>
                                
                            </tr>
                        <?php } }?>
                        
                    </table>

                    

                    <div class="cart-total">
                        <div class="total">
                            <p>Tổng tiền: 
                                <span>
                                    <?=number_format($total, 0, ',', '.') . ' VNĐ'?>
                                </span>
                            </p>
                            <input type="hidden" name="ID_khuyenmai" value="1">
                            <input type="hidden" name="total" value="<?=$total?>">
                            <input type="submit" class="muaNgay" value="Thanh toán" name="thanhtoan">
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>
</main>
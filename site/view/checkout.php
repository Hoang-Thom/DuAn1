<main>
    <div class="checkout-container">
        <div class="info-order">
            <div class="info-order-1">
                <h1>Thông tin giao hàng</h1>
                <p>Bạn đã có tài khoản? <a href="#">Đăng nhập</a></p>
                <form action="">
                    <input type="text" id="" placeholder="Họ và tên">
                    <div class="form-info">
                        <input class="form-email" type="text" id="" placeholder="Email">
                        <input class="form-sdt" type="text" id="" placeholder="Số điện thoại">
                    </div>
                    <input type="text" id="" placeholder="Địa chỉ">
                    <div class="form-address">
                        <select id="thanh-pho" name="thanh-pho">
                            <option value="">-- Chọn Thành Phố --</option>
                            <option value="">Hà Nội</option>
                            <option value="">TP. Hồ Chí Minh</option>
                            <option value="">Cần Thơ</option>
                            <option value="">Bình Dương</option>
                            <option value="">Bạc Liêu</option>
                        </select>
                        <select id="quan-huyen" name="quan-huyen">
                            <option value="">-- Chọn Quận/Huyện --</option>
                            <option value="">Quận 1</option>
                            <option value="">Quận 2</option>
                            <option value="">Quận 3</option>
                            <option value="">Quận 4</option>
                            <option value="">Quận 5</option>
                        </select>
                        <select id="phuong-xa" name="phuong-xa">
                            <option value="">-- Chọn Phường/Xã --</option>
                            <option value="">Phường Bến Nghé</option>
                            <option value="">Phường Bến Thành</option>
                            <option value="">Phường Đa Kao</option>
                            <option value="">Phường Phạm Ngũ Lão</option>
                            <option value="">Phường Tân Định</option>
                        </select>
                    </div>
                    <textarea class="" type="text" id="" placeholder="Ghi chú"></textarea>
                </form>
            </div>
            <div class="info-order-2">
                <h1>Phương thức thanh toán</h1>
                <div class="info-order-check"><input type="checkbox" id=""> Thanh toán khi nhận hàng</div>
                <div class="info-order-check"><input type="checkbox" id=""> Thanh toán qua Momo</div>
                <div class="info-order-check"><input type="checkbox" id=""> Thanh toán qua ví VNPay</div>
            </div>
        </div>
        <div class="info-pro">
            <div class="info-pro-1">
                <h1>Đơn hàng</h1>
                <p>1 Sản phẩm</p>
            </div>
            <div class="info-pro-2">
                <div class="info-pro-2-img">
                    <p>1</p><img src="../public/img/pie&tart-01.jpg" alt="">
                </div>
                <p class="info-pro-2-name">Set 6 Tart Mini</p>
                <p>200 000 VNĐ</p>
            </div>
            <div class="info-pro-3">
                <input type="text" id="" placeholder="Mã giảm giá">
                <button class="apdung" type="button">Áp dụng</button>
            </div>
            <div class="info-pro-4">
                <div class="info-pro-4-text">
                    <p>Tạm tính:</p>
                    <strong>200 000 VNĐ</strong>
                </div>
                <div class="info-pro-4-text">
                    <p>Phí vận chuyển:</p>
                    <strong>Miễn phí khu vực Hồ Chí Minh</strong>
                </div>
            </div>
            <div class="info-pro-5">
                <p>Tổng cộng:</p>
                <strong>200 000 VNĐ</strong>
            </div>
            <div class="info-pro-6">
                <a href="?page=pay" class="thanhtoan">Thanh toán</a>
            </div>
        </div>
    </div>
</main>
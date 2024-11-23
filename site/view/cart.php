<section class="cart">
        <h1>Giỏ Hàng Của Tôi</h1>
        <table>
            <tr>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th></th>
            </tr>
            <tr>
                <td><img src="../public/img/pie&tart-01.jpg" alt="Set 6 Tart Mini"></td>
                <td>Set 6 Tart Mini</td>
                <td>200,000 VNĐ</td>
                <td>
                    <div class="pro-quantity-input">
                        <button class="btn-decrease">-</button>
                        <input type="text" class="quantity-input" value="1" min="1" max="5">
                        <button class="btn-increase">+</button>
                    </div>
                </td>
                <td>200,000 VNĐ</td>
                <td>x</td>
            </tr>
        </table>

        <di class="cart-total">
            <div class="order-notes">
                <label for="notes">Ghi chú đơn hàng của tôi</label>
                <textarea id="notes"></textarea>
            </div>
    
            <div class="total">
                <p>Tổng tiền: <span>200,000 VNĐ</span></p>
                <a href="?page=checkout" class="muaNgay">Thanh toán</a>
            </div>
        </div>
    </section>
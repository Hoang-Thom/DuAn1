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
                                <a href="?page=decrease&id=<?=$p['ID_sanpham']?>"><button class="btn-decrease">-</button></a>
                                <input type="text" class="quantity-input" value="<?=$p['quantity']?>" min="1" max="5">
                                <a href="?page=increase&id=<?=$p['ID_sanpham']?>"><button class="btn-increase">+</button></a>
                            </div>
                        </td>
                        <td>
                            <?= number_format($itemTotal, 0, ',', '.') . ' VNĐ'?>
                        </td>
                        <td>
                            <a href="?page=delete&id=<?=$p['ID_sanpham']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                                <button class="btn-delete">xóa</button>
                            </a>
                        </td>
                        
                    </tr>
            <?php } }?>
            
        </table>

        <di class="cart-total">
            <div class="order-notes">
                <label for="notes">Ghi chú đơn hàng của tôi</label>
                <textarea id="notes"></textarea>
            </div>
    
            <div class="total">
                <p>Tổng tiền: 
                    <span>
                        <?=number_format($total, 0, ',', '.') . ' VNĐ'?>
                    </span>
                </p>
                <a href="?page=checkout" class="muaNgay">Thanh toán</a>
            </div>
        </div>
    </section>
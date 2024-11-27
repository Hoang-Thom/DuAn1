        <main class="sreach-product">
            <div class="products-container">
            <h2>Sản phẩm tìm kiếm của bạn</h2>
                <div class="product-list">
                    

                    <?php
                        if(!empty($productSearch)) { foreach($productSearch as $p){
                    ?>    

                    
                    <div class="product">
                        <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                            <div class="pro-ima"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                            <p><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></p>
                            <h3><?=$p['Ten_san_pham'] ?></h3>
                            <a href="../html/cart.html" class="buy-btn">Thêm vào giỏ hàng</a>
                        </a>
                    </div>
                    

                    <?php } } else { ?>
                        <p>Không tìm thấy sản phẩm nào</p>
                    <?php } ?>

                </div>
            </div>
        </main>
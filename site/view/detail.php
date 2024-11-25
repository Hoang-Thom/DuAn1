    <main>
        <div class="container-detail">
            <div class="product">
                <div class="pro-img">
                    <div class="pro-img-big">
                        <img id="mainImage" src="../public/img/<?=$product['Anh_san_pham']?>" alt>
                    </div>
                    <div class="pro-img-mini">
                        <img onclick="changeImage(this)" src="../public/img/pie&tart-01.jpg" alt>
                        <img onclick="changeImage(this)" src="../public/img/pie&tart-01.jpg" alt>
                        <img onclick="changeImage(this)" src="../public/img/pie&tart-01.jpg" alt>
                    </div>
                </div>

                <div class="product-info">
                    <h2><?=$product['Ten_san_pham']?></h2>
                    <h4><?=$product['Gia_san_pham']?> VND</h4>
                    <div class="pro-des">
                        <div class="pro-descsiton">Mô tả:</div>
                        <p>
                            <?=$product['Mo_ta_san_pham']?>
                        </p>
                    </div>
                    <div class="pro-qua">
                        <div class="pro-quantity">Số lượng:</div>
                        <div class="pro-quantity-input">
                            <p>-</p>
                            <span>1</span>
                            <p>+</p>
                        </div>
                    </div>
                    <div class="pro-button">
                        <a href="" class="muaNgay">Mua ngay</a>
                        <a href="../html/cart.html" class="themGio">Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>
            <div class="danhgia">
                <div class="danhgia-title">
                    <h1>Khách hàng đánh giá</h1>
                    <div class="star">
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </div>
                </div>
                <div class="danhgia-content">
                    <div class="danhgia-name">
                        <img src="../public/img/tiramisu-10.jpg" alt="">
                        <h3>Tên khách hàng đánh giá</h3>
                    </div>
                    <div class="star">
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </div>
                    <h4>Bánh ngon trang trí đẹp mắt giao hàng nhanh chóng bảo quản bánh tốt, khi giao đến bánh vẫn đẹp.</h4>
                    <div class="danhgia-ims">
                        <img src="../public/img/pie&tart-04.jpg" alt>
                        <img src="../public/img/pie&tart-05.jpg" alt>
                    </div>
                </div>

                <div class="danhgia-content">
                    <div class="danhgia-name">
                        <img src="../public/img/tiramisu-10.jpg" alt="">
                        <h3>Tên khách hàng đánh giá</h3>
                    </div>
                    <div class="star">
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    </div>
                    <h4>Bánh ngon trang trí đẹp mắt giao hàng nhanh chóng bảo quản bánh tốt, khi giao đến bánh vẫn đẹp.</h4>
                    <div class="danhgia-ims">
                        <img src="../public/img/pie&tart-01.jpg" alt>
                        <img src="../public/img/pie&tart-02.jpg" alt>
                    </div>
                </div>
            </div>

            <div class="underline">Sản phẩm tương tự</div>
            <div class="cakes">
                <div class="meu-cake">
                    <button class="left-1"><i class="fa-solid fa-angle-left"></i></button>
                    <div class="cake-4">
                        <?php
                            foreach($relateProduct as $p){
                        ?>

                        <div class="col-4-1 mgr-10">
                            <div class="img-cakes"><img src="../public/img/<?= $p['Anh_san_pham']?>" alt=""></div>
                            <div class="price-cake"><?= $p['Gia_san_pham']?></div>
                            <div class="name-cake"><?= $p['Ten_san_pham']?></div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <?php } ?>
                    </div>
                    <button class="right-1"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </main>
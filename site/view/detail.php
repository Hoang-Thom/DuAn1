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

                <form action="?page=addcart" method="post">
                    <div class="product-info">
                        <h2><?=$product['Ten_san_pham']?></h2>
                        <h4><?= number_format($product['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></h4>
                        <div class="pro-des">
                            <div class="pro-descsiton">Mô tả:</div>
                            <p>
                                <?=$product['Mo_ta_san_pham']?>
                            </p>
                        </div>
                        <input type="hidden" name="id" value="<?=$product['ID_sanpham']?>">
                        <div class="pro-qua">
                            <div class="pro-quantity">Số lượng:</div>
                            <div class="pro-quantity-input">
                                <button type="button" class="btn-decrease-detail">-</button>
                                <input type="text" name="quantity" class="quantity" value="1" min="1" max="5">
                                <button type="button" class="btn-increase-detail">+</button>
                            </div>
                        </div>
                        <div class="pro-button">
                            <button type="submit" class="muaNgay">Mua ngay</button>
                            <button type="submit" class="themGio">Thêm vào giỏ hàng</button> 
                        </div>
                    </div>
                </form>
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
                            <a class="a" href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                                <div class="img-cakes"><img src="../public/img/<?= $p['Anh_san_pham']?>" alt=""></div>
                                <div class="price-cake"><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="name-cake"><?= $p['Ten_san_pham']?></div>
                                <button>Thêm vào giỏ hàng</button>
                            </a>
                        </div>

                        <?php } ?>
                    </div>
                    <button class="right-1"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </main>
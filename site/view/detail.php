    <main>
        <div class="container-detail">
            <div class="product">
                <div class="pro-img">
                    <div class="pro-img-big">
                        <img id="mainImage" src="../public/img/<?=$product['Anh_san_pham']?>" alt>
                    </div>
                    <!-- <div class="pro-img-mini">
                        <img onclick="changeImage(this)" src="../public/img/pie&tart-01.jpg" alt>
                        <img onclick="changeImage(this)" src="../public/img/pie&tart-01.jpg" alt>
                        <img onclick="changeImage(this)" src="../public/img/pie&tart-01.jpg" alt>
                    </div> -->
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
                <h1 class="danhgia-h1">Khách hàng đánh giá</h1>
                
                <?php foreach ($comments as $c): ?>
                <div class="showdanhgia">
                    <h3 class="danhgianame"><?= $c['Ten_nguoidung'] ?></h3>
                    <div class="danhgiadate"><?= $c['Ngay_viet'] ?></div>
                    <h4><?= $c['Noi_dung'] ?></h4>
                    <div class="showHinh"><img src="../public/img/<?= $c['Hinh_anh'] ?>" alt=""></div>
                </div>
                <?php endforeach; ?>

                
                <div class="guidanhgia">
                    <form class="formdanhgia" action="?page=detail&id=<?=$product['ID_sanpham']?>" method="post" enctype="multipart/form-data">
                        <label for="">Bình luận của bạn:</label>
                        <input class="nameKH" type="text" name="ID_nguoidung" placeholder="Tên của bạn" value="<?= $isLoggedIn ? htmlspecialchars($_SESSION['user']['Ten_nguoidung']) : '' ?>">
                        <textarea class="binhluan" name="Noi_dung" placeholder="Nội dung bình luận"></textarea>
                        <input type="hidden" name="ID_sanpham"  value="<?= $product['ID_sanpham'] ?>">
                        <input type="file" name="Hinh_anh">
                        <div class="guidg"><button type="submit">Gửi bình luận</button></div>
                    </form>
                </div>

                <?php if (isset($_SESSION['message'])): ?>
                    <div class="alert alert-warning">
                        <?= htmlspecialchars($_SESSION['message']) ?>
                    </div>
                    <?php unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị ?>
                <?php endif; ?>

            </div>

            <div class="underline">Sản phẩm tương tự</div>
            <div class="cakes">
                <div class="meu-cake">
                    <!-- <button class="left-1"><i class="fa-solid fa-angle-left"></i></button> -->
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
                    <!-- <button class="right-1"><i class="fa-solid fa-angle-right"></i></button> -->
                </div>
            </div>
        </div>
    </main>
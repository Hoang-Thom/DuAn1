    <main class="main-home">
        <div class="banner-container">
            <!-- Banner 1 -->
            <div class="banner-slide">
                <div class="banner">
                    <div class="banner-img">
                        <img src="../public/img/banner-1.jpg" alt="">
                    </div>
                    <div class="banner-content">
                        <p class="banner-p">Tháng sinh nhật</p>
                        <h2>KHUYẾN MÃI BÁNH NGỌT</h2>
                        <p>SweetCakes dành tặng bạn những chiếc bánh ngọt ngào, thơm ngon với mức giá
                            ưu đãi hấp dẫn.</p>
                        <a href="?page=shop" class="buy-btn">Mua ngay</a>
                    </div>
                </div>
            </div>

            <!-- Banner 2 -->
            <div class="banner-slide2">
                <div class="banner">
                    <div class="banner-img">
                        <img src="../public/img/banner-2.jpg" alt="">
                    </div>
                    <div class="banner-content">
                        <p class="banner-p">Tháng sinh nhật</p>
                        <h2>KHUYẾN MÃI BÁNH NGỌT</h2>
                        <p>Hãy cùng SweetCakes tạo nên những khoảnh khắc ngọt ngào và hạnh phúc bên những chiếc bánh
                            thơm ngon.</p>
                        <a href="?page=shop" class="buy-btn">Mua ngay</a>
                    </div>
                </div>
            </div>

            <!-- Banner 3 -->
            <div class="banner-slide">
                <div class="banner">
                    <div class="banner-img">
                        <img src="../public/img/banner-3.jpg" alt="">
                    </div>
                    <div class="banner-content">
                        <p class="banner-p">Tháng sinh nhật</p>
                        <h2>KHUYẾN MÃI BÁNH NGỌT</h2>
                        <p>SweetCakes - Nơi bạn tìm thấy những chiếc bánh ngọt ngào, thơm ngon và đẹp mắt nhất.</p>
                        <a href="?page=shop" class="buy-btn">Mua ngay</a>
                    </div>
                </div>
            </div>

            <!-- Banner 4 -->
            <div class="banner-slide2">
                <div class="banner">
                    <div class="banner-img">
                        <img src="../public/img/banner-4.jpg" alt="">
                    </div>
                    <div class="banner-content">
                        <p class="banner-p">Tháng sinh nhật</p>
                        <h2>KHUYẾN MÃI BÁNH NGỌT</h2>
                        <p>SweetCakes - Lựa chọn hoàn hảo cho mọi dịp.</p>
                        <a href="?page=shop" class="buy-btn">Mua ngay</a>
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
            <button class="banner-prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="banner-next" onclick="changeSlide(1)">&#10095;</button>
        </div>

        <?php
            if(isset($blog1)) {
        ?>

        <section class="welcome">
            <div class="welcome-text">
                <h2>Chào mừng đến với SweetCakes</h2>
                <p class="welcome-p">Trải nghiệm mua sản phẩm tại cửa hàng</p>
                <p><?= $blog1['Noi_dung'] ?></p>
                <a href="?page=blog&id=<?=$blog1['ID_baiviet'] ?>" class="buy-btn">Xem thêm</a>
            </div>
            <div class="welcome-img">
                <img src="../public/img/welcome.jpg" alt="Welcome Image">
            </div>
        </section>

        <?php } ?>

        <section class="products">
            <div class="products-container">
                <h2>Sản Phẩm Của Chúng Tôi</h2>
                <p class="products-p">Sản phẩm mới nhất của chúng tôi</p>
                <div class="product-list">

                    <?php
                        if(isset($productsCate1)) { foreach($productsCate1 as $p){
                    ?>    

                    <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                        <div class="product">
                            <div class="pro-ima"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                            <p><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></p>
                            <h3><?=$p['Ten_san_pham'] ?></h3>
                            <a href="?page=cart" class="buy-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </a>

                    <?php }} ?>

                    
                </div>
            </div>
            <div class="products-navigation">
                <button class="products-prev">&#10094;</button>
                <button class="products-next">&#10095;</button>
            </div>
        </section>

        <section class="cake-types">
            <h2>Các loại bánh bán nổi bậc</h2>
            <p class="cake-types-p">Chúng tôi luôn sẵn sàng chào đón những khoảnh khắc đáng nhớ trong cuộc sống của bạn</p>
            <div class="cake-types-h5"><h5>SweetCakes</h5></div>
            <div class="cake-type-list">
                <div class="col1">
                    <div class="boxleft">
                        <a href="">
                            <div class="img">
                                <img src="./../public/img/cakes-icon.png" alt="">
                            </div>
                            <div class="text">
                                <h4>Bánh sinh nhật</h4>
                                <p>Bánh có nhân nho khô các loại mức trái cây socola kết hợp từng lớp cho ra sự hòa quyện
                                    giữa vị ngọt và vị béo vừa miệng không bị ngấy.</p>
                            </div>
                        </a>
                    </div>
                    <div class="boxleft">
                        <a href="">
                            <div class="img">
                                <img src="./../public/img/bread-icon.png" alt="">
                            </div>
                            <div class="text">
                                <h4>Bánh sinh nhật</h4>
                                <p>Bánh có nhân nho khô các loại mức trái cây socola kết hợp từng lớp cho ra sự hòa quyện
                                    giữa vị ngọt và vị béo vừa miệng không bị ngấy.</p>
                            </div>
                        </a>
                    </div>
                    <div class="boxleft">
                        <a href="">
                            <div class="img">
                                <img src="./../public/img/pie&tart-icon.png" alt="">
                            </div>
                            <div class="text">
                                <h4>Bánh sinh nhật</h4>
                                <p>Bánh có nhân nho khô các loại mức trái cây socola kết hợp từng lớp cho ra sự hòa quyện
                                    giữa vị ngọt và vị béo vừa miệng không bị ngấy.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col2">
                    <img id="myImage" src="./../public/img/cake-type-01.jpg" alt="">
                </div>
                <div class="col3">
                    <div class="boxright">
                        <a href="">
                            <div class="img">
                                <img src="./../public/img/tiramisu-icon.png" alt="">
                            </div>
                            <div class="text">
                                <h4>Bánh sinh nhật</h4>
                                <p>Bánh có nhân nho khô các loại mức trái cây socola kết hợp từng lớp cho ra sự hòa quyện
                                    giữa vị ngọt và vị béo vừa miệng không bị ngấy.</p>
                            </div>
                        </a>
                    </div>
                    <div class="boxright">
                        <a href="">
                            <div class="img">
                                <img src="./../public/img/cupcake-icon.png" alt="">
                            </div>
                            <div class="text">
                                <h4>Bánh sinh nhật</h4>
                                <p>Bánh có nhân nho khô các loại mức trái cây socola kết hợp từng lớp cho ra sự hòa quyện
                                    giữa vị ngọt và vị béo vừa miệng không bị ngấy.</p>
                            </div>
                        </a>
                    </div>
                    <div class="boxright">
                        <a href="">
                            <div class="img">
                                <img src="./../public/img/pudding-icon.png" alt="">
                            </div>
                            <div class="text">
                                <h4>Bánh sinh nhật</h4>
                                <p>Bánh có nhân nho khô các loại mức trái cây socola kết hợp từng lớp cho ra sự hòa quyện
                                    giữa vị ngọt và vị béo vừa miệng không bị ngấy.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu">
            <div class="menu-img">
                <img src="../public/img/menu-01.png" alt="Menu Image">
            </div>
            <div class="menu-items">
                <h2>Thực đơn</h2>
                    <?php
                        if(isset($productsCate2)) { foreach($productsCate2 as $p){
                    ?>    

                    <div class="menu-item">
                        <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                            <div class="menu-item-name">
                                <h3><?=$p['Ten_san_pham'] ?></h3>
                                <b></b>
                                <p class="price"><?=$p['Gia_san_pham'] ?></p>
                            </div>
                            <p><?=$p['Mo_ta_san_pham'] ?></p>
                        </a>
                    </div>

                    <?php }} ?>

            </div>
        </section>

        <section class="blog-posts">
            <h2>Bài viết</h2>
            <div class="post-list">
                
                <?php
                    if(isset($blog4)) { foreach($blog4 as $p){
                ?>

                <div class="post">
                    <a href="?page=blog&id=<?=$p['ID_baiviet'] ?>">
                        <img src="../public/img/<?=$p['Hinh_anh'] ?>" alt="Blog Post Image">
                        <h3><?=$p['Tieu_de'] ?></h3>
                        <div class="post-meta">
                            <p>Viết bởi chúng tôi</p>
                            <p class="date"><?=$p['Ngay_viet'] ?></p>
                        </div>
                    </a>
                </div>

                <?php }} ?>

            </div>
        </section>
    </main>

    
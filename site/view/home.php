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

        <section class="welcome">
            <div class="welcome-text">
                <h2>Chào mừng đến với SweetCakes</h2>
                <p class="welcome-p">Trải nghiệm mua sản phẩm tại cửa hàng</p>
                <p>Khi nhắc đến những buổi tiệc sinh nhật, lễ kỷ niệm hay đơn giản chỉ là những khoảnh khắc vui vẻ bên
                    gia đình và bạn bè, bánh kem luôn là món không thể thiếu. Và để làm cho những khoảnh khắc ấy trở nên
                    đặc biệt hơn, SweetCakes mang đến những chiếc bánh kem không chỉ ngon miệng mà còn đẹp mắt, như
                    những viên kẹo ngọt ngào. Mỗi chiếc bánh kem của SweetCakes đều được làm từ những nguyên liệu tươi
                    ngon nhất, kết hợp với sự sáng tạo không giới hạn.</p>
                <a href="?page=blog" class="buy-btn">Xem thêm</a>
            </div>
            <div class="welcome-img">
                <img src="../public/img/welcome.jpg" alt="Welcome Image">
            </div>
        </section>

        <section class="products">
            <div class="products-container">
                <h2>Sản Phẩm Của Chúng Tôi</h2>
                <p class="products-p">Bánh kem danh mục cakes</p>
                <div class="product-list">

                    <?php
                        if(isset($productsCate1)) { foreach($productsCate1 as $p){
                    ?>    

                    <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                        <div class="product">
                            <img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt="">
                            <p><?=$p['Gia_san_pham'] ?></p>
                            <h3><?=$p['Ten_san_pham'] ?></h3>
                            <a href="?page=cart" class="buy-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </a>

                    <?php }} ?>

                    
                </div>
            </div>
            <div class="products-navigation">
                <button class="products-prev" onclick="changeSlide(-1)">&#10094;</button>
                <button class="products-next" onclick="changeSlide(1)">&#10095;</button>
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
                <div class="post">
                    <a href="../html/blog.html">
                        <img src="../public/img/daylambanhkem.jpg" alt="Blog Post Image">
                        <h3>Các buổi workshop làm bánh được tổ chức định kỳ, thu hút sự tham gia của nhiều người yêu thích ẩm thực.</h3>
                        <div class="post-meta">
                            <p>Viết bởi chúng tôi</p>
                            <p class="date">02/11/2024</p>
                        </div>
                    </a>
                </div>
                
                <div class="post">
                    <a href="../html/blog.html">
                        <img src="../public/img/phanbietcacloaibanh.jpeg" alt="Blog Post Image">
                        <h3>Khi nói đến các loại bánh, có rất nhiều loại khác nhau với hương vị và cách chế biến riêng. Dưới đây là cách phân biệt một số loại bánh phổ biến mà bạn có thể gặp.</h3>
                        <div class="post-meta">
                            <p>Viết bởi chúng tôi</p>
                            <p class="date">01/11/2024</p>
                        </div>
                    </a>
                </div>

                <div class="post">
                    <a href="../html/blog.html">
                        <img src="../public/img/quytrinhlambanh.jpg" alt="Blog Post Image">
                        <h3>Làm bánh kem không chỉ đơn thuần là một nghệ thuật, mà còn là một khoa học. Dưới đây là quy trình chi tiết mà chúng tôi thực hiện để tạo ra những chiếc bánh kem thơm ngon và đẹp mắt.</h3>
                        <div class="post-meta">
                            <p>Viết bởi chúng tôi</p>
                            <p class="date">30/10/2024</p>
                        </div>
                    </a>
                </div>

                <div class="post">
                    <a href="../html/blog.html">
                        <img src="../public/img/welcome.jpg" alt="Blog Post Image">
                        <h3>Chúng tôi, những người sáng lập, luôn tin rằng bánh kem không chỉ là món ăn mà còn là một tác phẩm nghệ thuật, mang đến niềm vui và hạnh phúc cho mọi người.</h3>
                        <div class="post-meta">
                            <p>Viết bởi chúng tôi</p>
                            <p class="date">29/10/2024</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    
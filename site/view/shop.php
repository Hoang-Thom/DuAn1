    <main class="main-shop">
        <div class="title-catagory">Các Loại Bánh Của Chúng Tôi</div>
        <div class="catagory">

            <?php
                if(isset($categories)) { foreach($categories as $p){
            ?> 

            <div class="col-8 mgr-5">
                <a href="?page=shop&id=<?=$p['ID_danhmuc'] ?>">
                <div class="image-catagory"><img src="../public/img/<?=$p['Anh_danh_muc'] ?>" alt=""></div>
                <div class="name-catagory"><?=$p['Ten_danh_muc'] ?></div>
                </a>
            </div>

            <?php }} ?>

        </div>
        <div class="ship">
            <div class="text">Nhận Hàng hoặc Giao Hàng Trong Ngày</div>
            <div class="underline-both-0">Đặt ngay</div>
        </div>

        <div class="cakes">
            <div class="underline-both">Cakes</div>
            <p>Bánh kem được yêu thích của cửa hàng chúng tôi</p>
            <div class="meu-cake">
                <button class="left cakes-prev"><i class="fa-solid fa-angle-left" onclick="left"></i></button>
                <div class="cake-4 cakes-list">
                    <?php
                        if(isset($productsCake)) { foreach($productsCake as $p){
                    ?>    

                    <div id="<?=$p['ID_danhmuc']?>"  class="cakes-item item mgr-10">
                        <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                            <div class="col-4">
                                <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                                <div class="price-cake"><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                                <form class="form" action="?page=addcart" method="post">
                                    <input type="hidden" name="id" value="<?=$p['ID_sanpham']?>">
                                    <input type="hidden" name="Ten_san_pham" value="<?=$p['Ten_san_pham'] ?>">
                                    <input type="hidden" name="Gia_san_pham" value="<?=$p['Gia_san_pham'] ?>">
                                    <input type="hidden" name="Anh_san_pham" value="<?=$p['Anh_san_pham'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit">Thêm vào giỏ hàng</button> 
                                </form>
                            </div>
                        </a>
                    </div>

                    <?php }} ?>
                    
                </div>
                <button class="right cakes-next"><i class="fa-solid fa-angle-right" onclick="right"></i></button>

            </div>
        </div>
        <div class="cakes">
            <div class="underline-both-1">Pie & Tart</div>
            <p>Bánh kem được yêu thích của cửa hàng chúng tôi</p>
            <div class="meu-cake">
                <button class="left-1 pies-prev"><i class="fa-solid fa-angle-left"></i></button>
                <div class="cake-4 pies-list">
                
                    <?php
                        if(isset($productsPie)) { foreach($productsPie as $p){
                    ?>    

                    <div id="<?=$p['ID_danhmuc']?>" class="cakes-item item mgr-10">
                        <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                            <div class="col-4-1">
                                <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                                <div class="price-cake"><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                                <form class="form" action="?page=addcart" method="post">
                                    <input type="hidden" name="id" value="<?=$p['ID_sanpham']?>">
                                    <input type="hidden" name="Ten_san_pham" value="<?=$p['Ten_san_pham'] ?>">
                                    <input type="hidden" name="Gia_san_pham" value="<?=$p['Gia_san_pham'] ?>">
                                    <input type="hidden" name="Anh_san_pham" value="<?=$p['Anh_san_pham'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit">Thêm vào giỏ hàng</button> 
                                </form>
                            </div>
                        </a>
                    </div>

                    <?php }} ?>

                </div>
                <button class="right-1 pies-next"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
        <div class="cakes-1">
            <div class="underline-both-2">Bread</div>
            <p>Bánh kem được yêu thích của cửa hàng chúng tôi</p>
            <div class="meu-cake">
                <button class="left-2 bread-prev"><i class="fa-solid fa-angle-left"></i></button>
                <div class="cake-4 bread-list">
                    
                    <?php
                        if(isset($productsBread)) { foreach($productsBread as $p){
                    ?>    

                    <div id="<?=$p['ID_danhmuc']?>" class="cakes-item item mgr-10">
                        <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                            <div class="col-4">
                                <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                                <div class="price-cake"><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                                <form class="form" action="?page=addcart" method="post">
                                    <input type="hidden" name="id" value="<?=$p['ID_sanpham']?>">
                                    <input type="hidden" name="Ten_san_pham" value="<?=$p['Ten_san_pham'] ?>">
                                    <input type="hidden" name="Gia_san_pham" value="<?=$p['Gia_san_pham'] ?>">
                                    <input type="hidden" name="Anh_san_pham" value="<?=$p['Anh_san_pham'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit">Thêm vào giỏ hàng</button> 
                                </form>
                            </div>
                        </a>
                    </div>

                    <?php }} ?>

                </div>
                <button class="right-2 bread-next"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
        <div class="cakes">
            <div class="underline-both-1">Tiramisu</div>
            <p>Bánh kem được yêu thích của cửa hàng chúng tôi</p>
            <div class="meu-cake">
                <button class="left-1 tiramisu-prev"><i class="fa-solid fa-angle-left"></i></button>
                <div class="cake-4 tiramisu-list">
                    
                    <?php
                        if(isset($productsTira)) { foreach($productsTira as $p){
                    ?>    

                    <div id="<?=$p['ID_danhmuc']?>" class="cakes-item item mgr-10">
                        <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                            <div class="col-4-1">
                                <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                                <div class="price-cake"><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                                <form class="form" action="?page=addcart" method="post">
                                    <input type="hidden" name="id" value="<?=$p['ID_sanpham']?>">
                                    <input type="hidden" name="Ten_san_pham" value="<?=$p['Ten_san_pham'] ?>">
                                    <input type="hidden" name="Gia_san_pham" value="<?=$p['Gia_san_pham'] ?>">
                                    <input type="hidden" name="Anh_san_pham" value="<?=$p['Anh_san_pham'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit">Thêm vào giỏ hàng</button> 
                                </form>
                            </div>
                        </a>
                    </div>

                    <?php }} ?>

                </div>
                <button class="right-1 tiramisu-next"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
        <div class="cakes">
            <div class="underline-both">Cupcakes</div>
            <p>Bánh kem được yêu thích của cửa hàng chúng tôi</p>
            <div class="meu-cake">
                <button class="left cupcakes-prev"><i class="fa-solid fa-angle-left"></i></button>
                <div class="cake-4 cupcakes-list">

                    <?php
                        if(isset($productsCup)) { foreach($productsCup as $p){
                    ?>    

                    <div id="<?=$p['ID_danhmuc']?>" class="cakes-item item mgr-10">
                        <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                            <div class="col-4">
                                <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                                <div class="price-cake"><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                                <form class="form" action="?page=addcart" method="post">
                                    <input type="hidden" name="id" value="<?=$p['ID_sanpham']?>">
                                    <input type="hidden" name="Ten_san_pham" value="<?=$p['Ten_san_pham'] ?>">
                                    <input type="hidden" name="Gia_san_pham" value="<?=$p['Gia_san_pham'] ?>">
                                    <input type="hidden" name="Anh_san_pham" value="<?=$p['Anh_san_pham'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit">Thêm vào giỏ hàng</button> 
                                </form>
                            </div>
                        </a>
                    </div>

                    <?php }} ?>

                </div>
                <button class="right cupcakes-next"><i class="fa-solid fa-angle-right"></i></button>

            </div>
        </div>
        <div class="cakes-2">
            <div class="underline-both-2">Pudding</div>
            <p>Bánh kem được yêu thích của cửa hàng chúng tôi</p>
            <div class="meu-cake">
                <button class="left-3 pudding-prev"><i class="fa-solid fa-angle-left"></i></button>
                <div class="cake-4 pudding-list">
                    
                    <?php
                        if(isset($productsPudding)) { foreach($productsPudding as $p){
                    ?>    

                    <div id="<?=$p['ID_danhmuc']?>" class="cakes-item item mgr-10">
                        <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                            <div class="col-4-2">
                                <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                                <div class="price-cake"><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                                <form class="form" action="?page=addcart" method="post">
                                    <input type="hidden" name="id" value="<?=$p['ID_sanpham']?>">
                                    <input type="hidden" name="Ten_san_pham" value="<?=$p['Ten_san_pham'] ?>">
                                    <input type="hidden" name="Gia_san_pham" value="<?=$p['Gia_san_pham'] ?>">
                                    <input type="hidden" name="Anh_san_pham" value="<?=$p['Anh_san_pham'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit">Thêm vào giỏ hàng</button> 
                                </form>
                            </div>
                        </a>
                    </div>

                    <?php }} ?>

                </div>
                <button class="right-3 pudding-next"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
        <div class="cakes">
            <div class="underline-both">Cheesecakes</div>
            <p>Bánh kem được yêu thích của cửa hàng chúng tôi</p>
            <div class="meu-cake">
                <button class="left chees-prev"><i class="fa-solid fa-angle-left"></i></button>
                <div class="cake-4 chees-list">
                    
                    <?php
                        if(isset($productsChees)) { foreach($productsChees as $p){
                    ?>    

                    <div id="<?=$p['ID_danhmuc']?>" class="cakes-item item mgr-10">
                        <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                            <div class="col-4">
                                <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                                <div class="price-cake"><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                                <form class="form" action="?page=addcart" method="post">
                                    <input type="hidden" name="id" value="<?=$p['ID_sanpham']?>">
                                    <input type="hidden" name="Ten_san_pham" value="<?=$p['Ten_san_pham'] ?>">
                                    <input type="hidden" name="Gia_san_pham" value="<?=$p['Gia_san_pham'] ?>">
                                    <input type="hidden" name="Anh_san_pham" value="<?=$p['Anh_san_pham'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit">Thêm vào giỏ hàng</button> 
                                </form>
                            </div>
                        </a>
                    </div>

                    <?php }} ?>

                </div>
                <button class="right chees-next"><i class="fa-solid fa-angle-right"></i></button>

            </div>
        </div>
        <div class="cakes">
            <div class="underline-both-1">Cookies</div>
            <p>Bánh kem được yêu thích của cửa hàng chúng tôi</p>
            <div class="meu-cake">
                <button class="left-1 cookies-prev"><i class="fa-solid fa-angle-left"></i></button>
                <div class="cake-4 cookies-list">
                    
                <?php
                        if(isset($productsCook)) { foreach($productsCook as $p){
                    ?>    

                    <div id="<?=$p['ID_danhmuc']?>" class="cakes-item item mgr-10">
                        <a href="?page=detail&id=<?=$p['ID_sanpham'] ?>">
                            <div class="col-4-1">
                                <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                                <div class="price-cake"><?= number_format($p['Gia_san_pham'], 0, ',', '.') . ' VNĐ'; ?></div>
                                <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                                <form class="form" action="?page=addcart" method="post">
                                    <input type="hidden" name="id" value="<?=$p['ID_sanpham']?>">
                                    <input type="hidden" name="Ten_san_pham" value="<?=$p['Ten_san_pham'] ?>">
                                    <input type="hidden" name="Gia_san_pham" value="<?=$p['Gia_san_pham'] ?>">
                                    <input type="hidden" name="Anh_san_pham" value="<?=$p['Anh_san_pham'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit">Thêm vào giỏ hàng</button> 
                                </form>
                            </div>
                        </a>
                    </div>

                    <?php }} ?>

                </div>
                <button class="right-1 cookies-next"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
    </main>

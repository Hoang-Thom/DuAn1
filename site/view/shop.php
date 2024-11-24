    <main class="main-shop">
        <div class="title-catagory">Các Loại Bánh Của Chúng Tôi</div>
        <div class="catagory">
            <div class="col-8 mgr-10">
                <div class="image-catagory"><img src="../public/img/catagory-1.png" alt=""></div>
                <div class="name-catagory">Cakes</div>
            </div>
            <div class="col-8 mgr-10">
                <div class="image-catagory"><img src="../public/img/catagory-2.png" alt=""></div>
                <div class="name-catagory">Pie & Tart</div>
            </div>
            <div class="col-8 mgr-10">
                <div class="image-catagory"><img src="../public/img/catagory-3.png" alt=""></div>
                <div class="name-catagory">Bread</div>
            </div>
            <div class="col-8 mgr-10">
                <div class="image-catagory"><img src="../public/img/catagory-4.png" alt=""></div>
                <div class="name-catagory">Tiramisu</div>
            </div>
            <div class="col-8 mgr-10">
                <div class="image-catagory"><img src="../public/img/catagory-5.png" alt=""></div>
                <div class="name-catagory">Cupcakes</div>
            </div>
            <div class="col-8 mgr-10">
                <div class="image-catagory"><img src="../public/img/catagory-6.png" alt=""></div>
                <div class="name-catagory">Pudding</div>
            </div>
            <div class="col-8 mgr-10">
                <div class="image-catagory"><img src="../public/img/catagory-7.png" alt=""></div>
                <div class="name-catagory">Cheesecakes</div>
            </div>
            <div class="col-8">
                <div class="image-catagory"><img src="../public/img/catagory-8.png" alt=""></div>
                <div class="name-catagory">Cookies</div>
            </div>
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

                    <div class="cakes-item mgr-10">
                        <div class="col-4">
                            <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                            <div class="price-cake"><?=$p['Gia_san_pham'] ?></div>
                            <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>
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

                    <div class="cakes-item mgr-10">
                        <div class="col-4-1">
                            <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                            <div class="price-cake"><?=$p['Gia_san_pham'] ?></div>
                            <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>
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

                    <div class="cakes-item mgr-10">
                        <div class="col-4">
                            <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                            <div class="price-cake"><?=$p['Gia_san_pham'] ?></div>
                            <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>
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

                    <div class="cakes-item mgr-10">
                        <div class="col-4-1">
                            <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                            <div class="price-cake"><?=$p['Gia_san_pham'] ?></div>
                            <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>
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

                    <div class="cakes-item mgr-10">
                        <div class="col-4">
                            <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                            <div class="price-cake"><?=$p['Gia_san_pham'] ?></div>
                            <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>
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

                    <div class="cakes-item mgr-10">
                        <div class="col-4-2">
                            <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                            <div class="price-cake"><?=$p['Gia_san_pham'] ?></div>
                            <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>
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

                    <div class="cakes-item mgr-10">
                        <div class="col-4">
                            <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                            <div class="price-cake"><?=$p['Gia_san_pham'] ?></div>
                            <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>
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

                    <div class="cakes-item mgr-10">
                        <div class="col-4-1">
                            <div class="img-cakes"><img src="../public/img/<?=$p['Anh_san_pham'] ?>" alt=""></div>
                            <div class="price-cake"><?=$p['Gia_san_pham'] ?></div>
                            <div class="name-cake"><?=$p['Ten_san_pham'] ?></div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>
                    </div>

                    <?php }} ?>

                </div>
                <button class="right-1 cookies-next"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
    </main>

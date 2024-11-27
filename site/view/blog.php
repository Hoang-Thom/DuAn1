    <div class="banner-blog">Bài Viết</div>
    <div class="container-blog">
        <!-- Main Content -->
        <div class="main-blog">
            <img src="../public/img/<?= $blogID['Hinh_anh'] ?>" alt="Making a cake">
            <div class="post-meta">
            <p><?= $blogID['Ngay_viet'] ?></p></div>
            <h2><?= $blogID['Tieu_de'] ?></h2>
            <p><?= $blogID['Noi_dung'] ?></p>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <h4>Bài viết mới nhất</h4>
            <div class="latest-posts">
                <?php
                    if(isset($blog)) { foreach($blog as $p){
                ?>    

                <div class="post-item">
                    <img src="../public/img/<?=$p['Hinh_anh'] ?>" alt="Image 1">
                    <div class="post-date">
                        <a href="?page=blog&id=<?=$p['ID_baiviet'] ?>"><?=$p['Tieu_de'] ?></a>
                        <b><?=$p['Ngay_viet'] ?></b>
                    </div>
                </div>  

                <?php }} ?>

            </div>
        </div>
    </div>
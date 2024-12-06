


    <main>
    <form action="?page=editArt&id=<?=$Article['ID_baiviet']?>" method="post" enctype="multipart/form-data" class="add-blog">
        <h1>Sửa bài viết</h1>
        <label for="">Tiêu đề bài viết</label>
        <input type="text" name="Tieu_de" value="<?=$Article['Tieu_de']?>">
        <input type="date" name="Ngay_viet" value="<?=$Article['Ngay_viet']?>">
        <label for="">Nội dung</label>
        <textarea name="Noi_dung" id=""><?=$Article['Noi_dung']?></textarea>
        <label for="">Ảnh bài viết</label>
        <img src="../public/img/<?=$Article['Hinh_anh']?>" width="230px" height="150px" alt="">
        <label for="file">
            <input type="file" name="Hinh_anh">
        </label>
        <div class="adds">
            <button type="submit">Cập nhật</button>
        </div>
    </form>
</main>

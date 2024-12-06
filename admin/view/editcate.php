<main>
        <div class="login-box">
            <h2>Sửa danh mục</h2>
            <form action="?page=editcate&id=<?=$Category['ID_danhmuc']?>" method="post" enctype="multipart/form-data">
                <input type="text" name="tendanhmuc" value="<?=$Category['Ten_danh_muc']?>">
                <img src="../public/img/<?=$Category['Anh_danh_muc']?>" height="230px" alt="" >
                <label for="file" class="custom-file-upload">
                    <input class="fil" type="file" name="anhdanhmuc">
                </label>
                <button type="submit ">Cập nhật</button>
            </form>
        </div>
    </main>
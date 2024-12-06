<main>
        <div class="login-box">
            <h2>Thêm danh mục</h2>
            <form action="?page=addcate" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="Tên" name="tendanhmuc" required>

                <label for="file" class="custom-file-upload">
                    <input class="fil" type="file" name="anhdanhmuc">
                </label>
                <a href="?page=Category"><button type="submit">Thêm</button></a>
            </form>
        </div>
</main>
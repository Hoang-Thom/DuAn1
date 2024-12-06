<main>
        <div class="login-box">
            <h2>Sửa Sản Phẩm</h2>
            <form action="?page=editpro&id=<?=$Product['ID_sanpham']?>" method="post" enctype="multipart/form-data">
                <input type="text" name="Ten_san_pham" value="<?=$Product['Ten_san_pham']?>" >
                <input type="text" name="Gia_san_pham" value="<?=$Product['Gia_san_pham']?>">
                <input type="number" name="So_luong" value="<?=$Product['So_luong']?>">
                <textarea name="Mo_ta_san_pham" cols="60" rows="5" name="Mo_ta_san_pham" ><?=$Product['Mo_ta_san_pham']?></textarea>
                <label for="nguoidung">Danh mục</label>
                <select name="ID_danhmuc" id="nguoidung">
                    <?php
                    require_once('../Model/Database.php');
                    // Tạo kết nối và thực hiện truy vấn
                    try {
                        $sql = "SELECT ID_danhmuc, Ten_danh_muc FROM danhmuc";
                        $db = Database::getInstance(); // Giả sử phương thức này trả về một đối tượng kết nối CSDL
                        $users = $db->getAll($sql);

                        // Kiểm tra xem có dữ liệu trả về không
                        if ($users) {
                            foreach ($users as $user) {
                                echo "<option value='" . htmlspecialchars($user['ID_danhmuc'], ENT_QUOTES) . "'>"
                                    . htmlspecialchars($user['Ten_danh_muc'], ENT_QUOTES) . "</option>";
                            }
                        } else {
                            echo "<option disabled>No users found</option>"; // Nếu không có người dùng
                        }
                    } catch (Exception $e) {
                        // Xử lý lỗi nếu truy vấn gặp sự cố
                        echo "<option disabled>Error: " . htmlspecialchars($e->getMessage(), ENT_QUOTES) . "</option>";
                    }
                    ?>
                </select>
                <img src="../public/img/<?=$Product['Anh_san_pham']?>" height="230px" alt="" >                
                <label for="file" class="custom-file-upload">
                    <input class="fil" type="file" name="Anh_san_pham">
                </label>
                <button type="submit ">Cập nhật</a>
            </form>
        </div>
    </main>
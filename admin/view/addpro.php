<main>
        <div class="login-box">
            <h2>Thêm Sản Phẩm</h2>
            <form action="?page=addPro" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="Tên" name="Ten_san_pham" required>
                <input type="text" placeholder="Giá" name="Gia_san_pham" required>
                <input type="number" placeholder="Số lượng" name="So_luong" required>
                <input type="text" name="Mo_ta_san_pham" placeholder="Mô tả">
                <select name="ID_danhmuc" id="">
                    <option value="0">Chọn Danh mục</option>
                    <?php
                    require_once('../Model/Database.php');
                    // Tạo kết nối và thực hiện truy vấn
                    try {
                        $sql = "SELECT ID_danhmuc, Ten_danh_muc FROM danhmuc";
                        $db = Database::getInstance(); // Giả sử phương thức này trả về một đối tượng kết nối CSDL
                        $Pros = $db->getAll($sql);

                        // Kiểm tra xem có dữ liệu trả về không
                        if ($Pros) {
                            foreach ($Pros as $user) {
                                echo "<option value='" . htmlspecialchars($user['ID_danhmuc'], ENT_QUOTES) . "'>"
                                    . htmlspecialchars($user['Ten_danh_muc'], ENT_QUOTES) . "</option>";
                            }
                        } else {
                            echo "<option disabled>No Pros found</option>"; // Nếu không có người dùng
                        }
                    } catch (Exception $e) {
                        // Xử lý lỗi nếu truy vấn gặp sự cố
                        echo "<option disabled>Error: " . htmlspecialchars($e->getMessage(), ENT_QUOTES) . "</option>";
                    }
                    ?>
                </select>
                <label for="file" class="custom-file-upload">
                    <input class="fil" type="file" name="Anh_san_pham">
                </label>
                <a href="?page=Product"><button type="submit">Thêm</button></a>
            </form>
        </div>
</main>
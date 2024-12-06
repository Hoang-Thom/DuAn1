<main>
    <form action="?page=addArt" method="post" enctype="multipart/form-data" class="add-blog">
        <h1>Thêm bài viết</h1>
        <label for="tieude">Tiêu đề bài viết</label>
        <input type="text" name="Tieu_de" id="tieude" >

        <label for="ngayviet">Ngày viết</label>
        <input type="date" name="Ngay_viet" id="ngayviet" >


        <label for="noidung">Nội dung</label>
        <textarea name="Noi_dung" id="noidung" ></textarea>

        <label for="nguoidung">Người Viết</label>
        <select name="ID_nguoi_dung" id="nguoidung" >
            <?php
            require_once('../Model/Database.php');
            // Tạo kết nối và thực hiện truy vấn
            try {
                $sql = "SELECT ID_nguoidung, Ten_nguoidung FROM nguoidung";
                $db = Database::getInstance(); // Giả sử phương thức này trả về một đối tượng kết nối CSDL
                $users = $db->getAll($sql);

                // Kiểm tra xem có dữ liệu trả về không
                if ($users) {
                    foreach ($users as $user) {
                        echo "<option value='" . htmlspecialchars($user['ID_nguoidung'], ENT_QUOTES) . "'>"
                            . htmlspecialchars($user['Ten_nguoidung'], ENT_QUOTES) . "</option>";
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
        <label for="anhbaiviet">Ảnh bài viết</label>
        <input type="file" name="Hinh_anh" id="anhbaiviet"  >
        <div class="adds">
            <button type="submit">Thêm</button>
        </div>
    </form>
</main>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // Kiểm tra file upload
    if (isset($_FILES['anhbaiviet']) && $_FILES['anhbaiviet']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['anhbaiviet']['tmp_name'];
        $fileName = $_FILES['anhbaiviet']['name'];
        $fileSize = $_FILES['anhbaiviet']['size'];
        $fileType = $_FILES['anhbaiviet']['type'];

        $allowedFileTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (!in_array($fileType, $allowedFileTypes)) {
            $errors[] = "Chỉ được phép upload file ảnh (jpg, png, gif).";
        }

        if ($fileSize > 2 * 1024 * 1024) { // 2MB
            $errors[] = "Kích thước file không được vượt quá 2MB.";
        }

        if (empty($errors)) {
            $uploadFileDir = './uploads/';
            $dest_path = $uploadFileDir . $fileName;

            if (!move_uploaded_file($fileTmpPath, $dest_path)) {
                $errors[] = "Có lỗi xảy ra khi upload file.";
            }
        }
    } else {
        $errors[] = "Vui lòng chọn một file để upload.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        echo "<p style='color: green;'>File đã được upload thành công!</p>";
    }
}
?>

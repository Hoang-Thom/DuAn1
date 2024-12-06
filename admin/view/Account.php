<main>
        <article>
            <h1>Quản Lý Tài Khoản</h1>
            <button class="add-new "><a href="?page=showaddAcc">Thêm mới</a></button>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Mật khẩu</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Vai trò</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($Accounts as $key=>$value) { ?>
                    
    <style>
        input[type="password"], input[type="text"] {
            padding: 5px 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
        }
        button {
            padding: 5px 10px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #6B9160;
            color: white;
            margin-left: 5px;
        }
        button:hover {
            background-color: #38672b;
        }
    </style>
    <script>
    
                        function togglePassword(id) {
                            const passwordField = document.getElementById("password_" + id);
                            const toggleButton = document.getElementById("toggle_" + id);
                            if (passwordField.type === "password") {
                                passwordField.type = "text";
                                toggleButton.innerText = "Ẩn";
                            } else {
                                passwordField.type = "password";
                                toggleButton.innerText = "Hiện";
                            }
                        }
                    </script>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$value['Ten_nguoidung']?></td>
                        
    <td>
        <input id="password_<?=$key?>" type="password" value="<?=$value['Mat_khau']?>" readonly>
        <button id="toggle_<?=$key?>" onclick="togglePassword(<?=$key?>)">Hiện</button>
    </td>
    
                        <td><?=$value['So_dien_thoai']?></td>
                        <td><?=$value['Email']?></td>
                        <td><?php
                            if($value['Vai_tro'] == 0){
                                echo"Người dùng";
                            }else{
                                echo"Admin";
                            }
                            ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </article>
</main>

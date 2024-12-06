<main>
        <article>
            <h1>Quản Lý Tài Khoản</h1>
            <button class="add-new "><a href="?page=showaddAcc">Thêm mới</a></button>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Vai trò</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($Accounts as $key=>$value) { ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$value['Ten_nguoidung']?></td>
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

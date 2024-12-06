<main>
        <article>
            <h1>Quản Lý Bình luận</h1>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Sản Phẩm</th>
                        <th>Ngày viết</th>
                        <th>Người bình luận</th>
                        <th>Nội dung</th>
                        <th>Hình ảnh</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($Comments as $key=>$value) { ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td class="img-dm"><?=$value['Ten_san_pham']?></td>
                        <td><?=$value['Ngay_viet']?></td>
                        <td class="img-bl"><?=$value['Ten_nguoidung']?></td>
                        <td><textarea name="" cols="50" rows="7" id=""><?=$value['Noi_dung']?></textarea></td>
                        <td><img src="../public/img/<?=$value['Hinh_anh']?>" alt=""></td>
                        <td class="test ">
                        <a href="?page=deleteComment&id=<?=$value['ID_binhluan']?>"><button class="xem">Xóa</button></a> 
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </article>
    </main>
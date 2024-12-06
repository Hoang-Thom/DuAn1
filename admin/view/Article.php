
<main>
        <article>
            <h1>Quản Lý Bài Viết</h1>
            <button class="add-new"><a href="?page=showaddArt">Thêm mới</a></button>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Ngày viết</th>
                        <th>Ảnh</th>
                        <th>Người viết</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($Articles as $key=>$value) { ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$value['Tieu_de']?></td>
                        <td style="width: 100px;"><?=$value['Ngay_viet']?></td>
                        <td class="img-dm"><img src="../public/img/<?=$value['Hinh_anh']?>" alt=""></td>
                        <td><?=$value['Ten_nguoidung']?></td>
                        <td class="test ">
                        <a href="?page=deleteArticle&id=<?=$value['ID_baiviet']?>"><button class="delete-1 ">Xóa</button></a> 
                        <a href="?page=showeditArt&id=<?=$value['ID_baiviet']?>"><button class="edit-1 ">Sửa</button></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </article>
</main>
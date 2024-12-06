<main>
        <article>
            <h1>Quản Lý Danh Mục</h1>
            <button class="add-new "><a href="?page=showaddcate">Thêm mới</a></button>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Categories as $key=>$value) { ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td class="name"><?=$value['Ten_danh_muc']?> </td>
                        <td class="img-dm"><img src="../public/img/<?=$value['Anh_danh_muc']?>" alt=""></td>
                        <td class="test">
                            <a href="?page=deletecate&id=<?=$value['ID_danhmuc']?>"><button class="delete-1 ">Xóa</button></a> 
                            <a href="?page=showeditcate&id=<?=$value['ID_danhmuc']?>"><button class="edit-1 ">Sửa</button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </article>
    </main>
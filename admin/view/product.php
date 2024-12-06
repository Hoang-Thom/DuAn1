<main>
        <article>
            <h1>Quản Lý Sản Phẩm</h1>
            <button class="add-new "><a href="?page=showaddpro">Thêm mới</a></button>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th  width="300px">Tên</th>
                        <th>Ảnh</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($Products as $key=>$value) { ?>
                    <tr>
                        <td><?=$key+1?></td>                        
                        <td style="width: 100px;"><?=$value['Ten_san_pham']?></td>
                        <td class="img-dm"><img src="../public/img/<?=$value['Anh_san_pham']?>" alt=""></td>
                        <td style="width: 150px;"><?=$value['Ten_danh_muc']?> </td>
                        <td style="width: 150px;"><?= number_format($value['Gia_san_pham'],0,',','.'). ' VND';?></td>
                        <td class="test ">
                            <a href="?page=deletepro&id=<?=$value['ID_sanpham']?>"><button class="delete-1 ">Xóa</button></a>   
                            <a href="?page=showeditpro&id=<?=$value['ID_sanpham']?>"><button class="edit-1 ">Sửa</button></a>   
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </article>
    </main >
<main>
        <article>
            <h1>Quản Lý Khuyến Mãi</h1>
            <button class="add-new "><a href="?page=showaddsal">Thêm mới</a></button>
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Phần trăm giảm</th>
                        <th style="width: 200px;">Điều kiện</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Mã giảm</th>
                        <th>Số lượng</th>
                        <th>Tình trạng</th>
                        <th width="200px">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($Sales as $key=>$value) { ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$value['Phan_tram_giam']?>%</td>
                        <td><?=$value['Dieu_kien_ap_dung']?></td>
                        <td><?=$value['Ngay_bat_dau']?></td>
                        <td>1<?=$value['Ngay_ket_thuc']?></td>
                        <td><?=$value['Ma_giam']?></td>
                        <td><?=$value['So_luong']?></td>
                        <td>
                            <?php if($value['So_luong'] == 0){
                                echo'<span style="color: red;">Hết</span>';;
                            }else{
                                echo'<span style="color: green;">Còn</span>';
                            }
                            ?>
                        </td>
                        <td><a href="?page=deleteSale&id=<?=$value['ID_khuyenmai']?>"><button class="delete-1 ">Xóa</button></a>
                        <a href="?page=showeditSale&id=<?=$value['ID_khuyenmai']?>"><button class="edit-1 ">Sửa</button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </article>
    </main>
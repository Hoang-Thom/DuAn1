
<main>
        <article>
            <h1>Quản Lý Đơn Hàng</h1>
            <br>
           <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên người dùng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Phương thức thanh toán</th>
                            <th>khuyến mãi</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($Oders as $key=>$value) { ?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td><?=$value['Ten_nguoidung']?></td>
                            <td><?=$value['Ngay_dat_hang']?></td>
                            <td><?=$value['Tong_tien']?></td>
                            <td>
                            <?php if($value['Trang_thai'] == 0){
                                echo '<span style="color: red;">Đã hủy</span>';
                            }else if($value['Trang_thai'] == 1){
                                echo "Chờ xác nhận";
                            }elseif($value['Trang_thai'] == 2){
                                echo '<span style="color: green;">Xác nhận thành công</span>';
                            }
                            
                            ?></td>
                            <td><?=$value['Dia_chi_giao_hang']?></td>
                            <td><?=$value['Phuong_thuc_thanh_toan']?></td>
                            <td><?=$value['Ma_giam']?></td>
                            <td class="test ">
                            <form action="" method="post" enctype="multipart/form-data">
                                
                                <?php if($value['Trang_thai'] == 0){
                                   ?>
                                   <button disabled class="delete-1-1" type="submit" name="huy" value="Huy">Hủy</button>
                                   <button disabled class="edit-1-1" type="submit"  name="xacnhan" value="XacNhan">Xác Nhận</button>
                                   <?php
                                }else if($value['Trang_thai'] == 1){
                                    ?>
                                    <button class="delete-1-1" type="submit" name="huy" value="Huy">Hủy</button>
                                    <button class="edit-1-1" type="submit"  name="xacnhan" value="XacNhan">Xác Nhận</button>  
                                    <?php
                                }else if($value['Trang_thai'] == 2){
                                    ?>
                                    <button disabled class="delete-1-1" type="submit" name="huy" value="Huy">Hủy</button>
                                    <button disabled class="edit-1-1" type="submit" name="xacnhan" value="XacNhan">Xác Nhận</button>
                                    <?php
                                }?>
                             
                                <input type="hidden" name="ID_donhang" value="<?=$value['ID_donhang']?>">
                                <button class="xem-1"><a href="?page=CTDH&id=<?=$value['ID_donhang']?>">Xem</a></button>
                            </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
           
        </article>
    </main>
    
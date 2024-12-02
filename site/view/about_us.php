    <main class="about_us-main">
        <div class="ship">Giới Thiệu</div>

        <?php
            if(isset($blogLatest1)) {
        ?>
        <section class="welcome">
            <div class="welcome-text">
                <h3>Chào mừng đến với SweetCakes</h3>
                <p class="welcome-p"><?= $blogLatest1['Tieu_de'] ?></p>
                <p><?= $blogLatest1['Noi_dung'] ?></p>
                <a href="?page=blog&id=<?=$blogLatest1['ID_baiviet'] ?>" class="buy-btn">Xem thêm</a>
            </div>
            <div class="welcome-img">
                <img src="../public/img/<?= $blogLatest1['Hinh_anh'] ?>" alt="Welcome Image">
            </div>
        </section>
        <?php } ?>


        <?php
            if(isset($blogOldest)) {
        ?>
        <section class="welcome2">
            <div class="welcome-text">
                <h3>Chào mừng đến với SweetCakes</h3>
                <p class="welcome-p"><?= $blogOldest['Tieu_de'] ?></p>
                <p><?= $blogOldest['Noi_dung'] ?></p>
                <a href="?page=blog&id=<?=$blogOldest['ID_baiviet'] ?>" class="buy-btn">Xem thêm</a>
            </div>
            <div class="welcome-img">
                <img src="../public/img/<?= $blogOldest['Hinh_anh'] ?>" alt="Welcome Image">
            </div>
        </section>
        <?php } ?>

        <!-- <section class="team-section">
            <h2>Thành viên</h2>
            <div class="team-header">
                <p>Các nhà phát triển của chúng tôi</p>
            </div>
            <div class="team-wrapper">
                <div class="team-container">
                    <div class="team-member">
                        <div class="team-member-name">
                            <img src="https://via.placeholder.com/100"
                                alt="Hoàng Nho Thơm">
                            <div class="team-name">
                                <h3>Hoàng Nho Thơm</h3>
                                <p class="id">PS36607</p>
                            </div>
                        </div>
                        <p class="role">Nhóm trưởng</p>
                        <p class="description">Quản lý dự án, thiết kế, lập
                            kế hoạch triển khai dự án, tổng hợp và hoàn
                            thành dự án.</p>
                    </div>
                    <div class="team-member">
                        <div class="team-member-name">
                            <img src="https://via.placeholder.com/100"
                                alt="Hoàng Nho Thơm">
                            <div class="team-name">
                                <h3>Hoàng Nho Thơm</h3>
                                <p class="id">PS36607</p>
                            </div>
                        </div>
                        <p class="role">Nhóm trưởng</p>
                        <p class="description">Quản lý dự án, thiết kế, lập
                            kế hoạch triển khai dự án, tổng hợp và hoàn
                            thành dự án.</p>
                    </div>
                    <div class="team-member">
                        <div class="team-member-name">
                            <img src="https://via.placeholder.com/100"
                                alt="Hoàng Nho Thơm">
                            <div class="team-name">
                                <h3>Hoàng Nho Thơm</h3>
                                <p class="id">PS36607</p>
                            </div>
                        </div>
                        <p class="role">Nhóm trưởng</p>
                        <p class="description">Quản lý dự án, thiết kế, lập
                            kế hoạch triển khai dự án, tổng hợp và hoàn
                            thành dự án.</p>
                    </div>

                </div>
                <button class="prev-btn">&#10094;</button>
                <button class="next-btn">&#10095;</button>
            </div>
        </section> -->

        <section class="team-section">
            <h2>Nhà phát triển</h2>
            <div class="team-header">
                <p>Các nhà phát triển của chúng tôi</p>
            </div>
            <div class="team-wrapper">
                <div class="team-container">
                    <div class="team-member">
                        <div class="team-member-name">
                            <img src="../public/img/khoi.jpg" alt="Lê Văn Khơi">
                            <div class="team-name">
                                <h3>Lê Văn Khơi</h3>
                                <p class="id">PS38974</p>
                            </div>
                        </div>
                        <p class="role">Thành viên</p>
                        <p class="description">Quản lý dự án, thiết kế, lập kế hoạch triển khai dự án, tổng hợp và hoàn thành dự án.</p>
                    </div>

                    <div class="team-member">
                        <div class="team-member-name">
                            <img src="../public/img/thom.jpg" alt="Hoàng Nho Thơm">
                            <div class="team-name">
                                <h3>Hoàng Nho Thơm</h3>
                                <p class="id">PS36607</p>
                            </div>
                        </div>
                        <p class="role">Nhóm trưởng</p>
                        <p class="description">Quản lý dự án, thiết kế, lập kế hoạch triển khai dự án, tổng hợp và hoàn thành dự án.</p>
                    </div>

                    <div class="team-member">
                        <div class="team-member-name">
                            <img src="../public/img/duy.jpg" alt="Nguyễn Hoàng Duy">
                            <div class="team-name">
                                <h3>Nguyễn Hoàng Duy</h3>
                                <p class="id">PS38982</p>
                            </div>
                        </div>
                        <p class="role">Thành viên</p>
                        <p class="description">Quản lý dự án, thiết kế, lập kế hoạch triển khai dự án, tổng hợp và hoàn thành dự án.</p>
                    </div>

                    <div class="team-member">
                        <div class="team-member-name">
                            <img src="../public/img/binh.jpg" alt="Nguyễn Hải Bình">
                            <div class="team-name">
                                <h3>Nguyễn Hải Bình</h3>
                                <p class="id">PS40254</p>
                            </div>
                        </div>
                        <p class="role">Thành viên</p>
                        <p class="description">Quản lý dự án, thiết kế, lập kế hoạch triển khai dự án, tổng hợp và hoàn thành dự án.</p>
                    </div>

                    <div class="team-member">
                        <div class="team-member-name">
                            <img src="../public/img/tuong.jpg" alt="Trần Mạnh Tường">
                            <div class="team-name">
                                <h3>Trần Mạnh Tường</h3>
                                <p class="id">PS42664</p>
                            </div>
                        </div>
                        <p class="role">Thành viên</p>
                        <p class="description">Quản lý dự án, thiết kế, lập kế hoạch triển khai dự án, tổng hợp và hoàn thành dự án.</p>
                    </div>
                    
                    <div class="team-member">
                        <div class="team-member-name">
                            <img src="../public/img/triet.jpg" alt="Lê Minh Triết">
                            <div class="team-name">
                                <h3>Lê Minh Triết</h3>
                                <p class="id">PS40293</p>
                            </div>
                        </div>
                        <p class="role">Thành viên</p>
                        <p class="description">Quản lý dự án, thiết kế, lập kế hoạch triển khai dự án, tổng hợp và hoàn thành dự án.</p>
                    </div>
                    
                    <button class="prev-team">&#10094;</button>
                    <button class="next-team">&#10095;</button>
                </div>
            </div>
        </section>

        <div class="team-QandA">
            <div class="team-QandA-Text">
                <h3>Hỏi & Đáp</h3>
                <div class="co"><h1>Gửi Email cho chúng tôi</h1></div>
            </div>
            <div class="form">
                <div class="form-row">
                    <input class="form-name" type="text" id placeholder="Tên">
                    <input class="form-email" type="text" id placeholder="Email">
                </div>
                <input type="text" id placeholder="Điện thoại">
                <input class="form-text" type="text" id placeholder="Lời nhắn">
            </div>
            <div class="pro-row">
                <h4>Chúng tôi sẽ trả lời câu hỏi của bạn trong thời gian sớm nhất</h4>
                <a href="" class="buy-btn">Gửi</a>
            </div>
        </div>
    </main>

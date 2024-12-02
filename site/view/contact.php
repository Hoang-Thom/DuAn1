    <main class="contact-main">
        <div class="container">
            <div class="product">
                <div class="pro-img">
                    <div class="pro-img-big">
                        <img src="../public/img/pc_top.png" alt>
                    </div>
                </div>

                <div class="product-info">
                    <h1>Hệ thống cửa hàng</h1>
                    <div class="pro-des">
                        <p>
                            Tô ký, trung mỹ tây, quận 12, TP.HCM<br>
                            Phạm ngọc thạch, cái khế, quận ninh kiều, TP.Cần Thơ<br>
                            Võ văn kiệt, phường 1, TP.Bạc Liêu
                        </p>
                    </div>
                    <h1>Giờ mở cửa</h1>
                    <div class="pro-des">
                        <p>
                            Mỗi ngày: 8:00 - 22:00<br>
                            Đơn hàng trực tuyến: 8:00 - 00:00
                        </p>
                    </div>
                    <h1>Email</h1>
                    <div class="pro-des">
                        <p>
                            Sweetcakes0512@gmail.com<br>
                            Sweetcakes2910@gmai.com
                        </p>
                    </div>
                    <h1>Điện thoại</h1>
                    <div class="pro-des">
                        <p>
                            +84 123 456 789
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4544374621655!2d106.6242089745181!3d10.852999257777702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1731998039976!5m2!1svi!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div align="center">
            <h3>Hỏi & Đáp</h3>
            <h1>Gửi Email cho chúng tôi</h1>
        </div>

        <?php
        $name = htmlspecialchars($_POST['name'] ?? "");
        $mail = htmlspecialchars($_POST['email'] ?? "");
        $sub = htmlspecialchars($_POST['subject'] ?? "");
        $Message = htmlspecialchars($_POST['Message'] ?? "");

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (empty($name) || empty($mail) || empty($sub) || empty($Message)) {
                echo "Vui lòng nhập đủ tin!";
            } else {
                try {
                    senmail($Message, $sub, $mail, $name);
                    echo "Thành công";
                } catch (Exception $e) {
                    echo "Có lỗi xảy ra khi gửi email: " . $e->getMessage();
                }
            }
        }
        ?>

        <!-- Your form
        <div class="col-md-6 contact-right-content">
            <form method="post">
                <label>Tên:</label>
                <input type="text" name="name" placeholder="Tên" required value="">

                <label>Email:</label>
                <input type="email" class="email" name="email" placeholder="Email" required value="" >

                <label>Điện thoại:</label>
                <input type="tel" name="subject" placeholder="Điện thoại" required value="">

                <label>Lời nhắn:</label>
                <textarea name="Message" placeholder="Lời nhắn" required></textarea>

                <div class="read mt-3">
                    <input type="submit" value="Gửi" >
                </div>
            </form>
        </div> -->

        <form class="form-contact" method="post">
            <div class="form-cont">
                <div class="form-row">
                    <input class="form-name" type="text" name="name" placeholder="Tên" required>
                    <input class="form-email" type="text" name="email" placeholder="Email" required>
                </div>
                <input type="text" name="subject" placeholder="Điện thoại" required>
                <input class="form-text" type="text" name="Message" placeholder="Lời nhắn" required>
            </div>
            <div class="pro-row">
                <h4>Chúng tôi sẽ trả lời câu hỏi của bạn trong thời gian sớm nhất</h4>
                <input type="submit" class="gui" value="Gửi">
            </div>
        </form>
    </main>
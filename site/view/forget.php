<?php
    $loi = "";
    $thongbao = "";
    if (isset($_POST['nutxacnhan'])==true){
        $Email = $_POST['Email'];
        $conn = new PDO("mysql:host=localhost;dbname=cake;charset=utf8", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql= "SELECT * FROM nguoidung WHERE Email = ? ";
        $stmt = $conn->prepare($sql);
        $stmt->execute( [$Email] ); 
        $count = $stmt->rowCount();
        if ($count==0){
            $loi= "Email bạn chưa đăng ký thành viên";
        }
        else {
            $matkhaumoi = substr(md5(rand(0,999999)), 0, 6);
            $sql= "UPDATE nguoidung SET Mat_khau = ? WHERE Email = ? ";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$matkhaumoi, $Email]);
            $thongbao =  "Đã cập nhật mật khẩu";
            Guimail($matkhaumoi , $Email );           
        }
    } 
?> 

<?php
 function Guimail($matkhau , $Email ){
    require "../PHPMailer-master/src/PHPMailer.php"; 
    require "../PHPMailer-master/src/SMTP.php"; 
    require '../PHPMailer-master/src/Exception.php'; 
    $mail = new 
    \PHPMailer\PHPMailer\PHPMailer(true); 
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'sweetcakes2910@gmail.com'; // SMTP username
        $mail->Password = 'xgux bynz qldl emrt';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('sweetcakes2910@gmail.com', 'SweetCakes' ); 
        $mail->addAddress($Email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư gửi lại mật khẩu';
        $noidungthu = "<p>Bạn nhận được thư này vì bạn hoặc người khác đã gửi yêu cầu cấp mật khẩu mới từ website</p>
                       Mật khẩu của bạn là $matkhau
        "; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        // echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Lỗi: ', $mail->ErrorInfo;
    }
 }

?>

 <main class="main-forget">
        <div class="forgot-password-box">
            <h2>Quên mật khẩu</h2>

            <?php if($loi!="") {?> 
                <div class="forgot-password-box-user"> <?php echo $loi ?> </div>    
            <?php } ?>

            <?php if($thongbao!="") {?> 
            <div class="forgot-password-box-user"> <?php echo $thongbao ?> </div>    
        <?php } ?>

            <form action="index.php?page=forget" method="post">
                <input value="<?php if (isset($Email)==true)echo $Email ?>" type="email" name="Email" placeholder="Email" required>
                <p>Xác nhận địa chỉ email, mật khẩu mới sẽ được gửi tới email của bạn</p>
                <button type="submit" name="nutxacnhan" class="forgot-password-button">Xác nhận</button>
            </form>
        </div>
    </main>
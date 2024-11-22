<?php
// session_start();
// if(isset($POST["login"])){
//     $uname=$_POST["uname"];
//     $psw=$_POST["psw"];
//     $user=checkuser($uname,$psw);
//     if(isset($user)&&(is_array($user))&&(count($user)>0)){
//         extract($user);
//         if($role==1){
//             $_SESSION['s_user']=$user;
//             header('location: index.php');
//         }else{
//             $tb="Tài khoản này không có quyền đăng nhập trang quản trị.";
            
//         }
//     }else{
//         $tb="Tài khoản này không tồn tại.";
//     }
// }
?>
    <main class="main">
        <div class="login-box">
            <h2>Đăng nhập</h2>
            <forphpnjnm>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Mật khẩu" required>
                <div class="links">
                    <a href="?page=register">Đăng ký</a>
                    <a href=".?page=forget">Quên mật khẩu?</a>
                </div>
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
    </main>

<?php

class UserController {
    // thuộc tính
    private $userModel;
    
    // Khởi tạo
    public function __construct() {
        require_once('../model/UserModel.php');
        $this->userModel = new UserModel();
    }
    
    // Tạo trang đăng nhập
    public function renderLogin() {
        require_once('view/login.php');
    }
    public function login($data){
        // print_r($data);
        $user = $this->userModel->getUser($data);
        // print_r($user);
        if($user){
            echo "Đăng nhập thành công";
            $_SESSION['user']=$user;
            if($user['Vai_Tro']==1){
                header('location: index.php');
            }else{
                header('location: ../admin/index.php');
            }
        }else{
            echo "Đăng nhập thất bại";
        }
    }
    public function renderRegister() {
        require_once('view/register.php');
    }
    public function register($data){
        require_once('view/register.php');
        // print_r($data);
        $result = $this->userModel->addUser($data);
        if($result){
            header('location: index.php?page=loginpage');
        }else{
            echo "Đăng ký thất bại";
        }
    }
}

?>
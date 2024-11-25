<?php

    require_once('view/header.php');
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    // echo $page;
    switch($page){
        case 'home':
            require_once('controller/ProductController.php');
            $productController = new ProductController();
            $productController->renderHome();
            break;
        case 'shop':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            } else {
                $id = null; // Gán giá trị mặc định nếu không có id
            }
            require_once('controller/ProductController.php');
            $productController = new ProductController();
            $productController->renderShop($id);
            break;
        case 'detail':
            $id=$_GET['id'];
            require_once('controller/ProductController.php');
            $productController = new ProductController();
            $productController->renderDetail($id);
            break;
        case 'cart':
            require_once('view/cart.php');
            break;
        case 'checkout':
            require_once('view/checkout.php');
            break;
        case 'pay':
            require_once('view/pay.php');
            break;
        case 'blog':
            require_once('view/blog.php');
            break;
        case 'loginpage':
            require_once('controller/UserController.php');
            $userController = new UserController();
            $userController->renderLogin();
            break;
        case 'login':
            $data=$_POST;
            require_once("controller/UserController.php");
            $userController = new UserController();
            $userController->login($data);
            break;
        case 'registerpage':
            require_once('controller/UserController.php');
            $userController = new UserController();
            $userController->renderRegister();
            break;
        case 'register':
            $data=$_POST;
            require_once('controller/UserController.php');
            $userController = new UserController();
            $userController->register($data);
            break;
        case 'forget':    
            require_once('view/forget.php');    
            break;                 
        default: 
            echo "Trang không tồn tại";
            break;
    }
    require_once('view/footer.php');
?>
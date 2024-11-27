<?php

    session_start();
    // session_unset();

    ob_start();
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
        case 'addcart':
            if (isset($_POST['id']) && isset($_POST['quantity'])) {
                $id = $_POST['id'];
                $quantity = $_POST['quantity'];

                require_once('controller/CartController.php');
                $cartController = new CartController();
                $cartController->addCart($id, $quantity);
            } else {
                require_once('view/cart.php');
            }
            break;
        case 'cart':
            require_once('controller/CartController.php');
            $cartController = new CartController();
            $cartController->renderCart();
            break;
        case 'increase':
            $id=$_GET['id'];
            require_once('controller/CartController.php');
            $cartController = new CartController();
            $cartController->increaseQuantity($id);
            break;
        case 'decrease':
            $id=$_GET['id'];
            require_once('controller/CartController.php');
            $cartController = new CartController();
            $cartController->decreaseQuantity($id);
            break;
        case 'delete':
            $id=$_GET['id'];
            require_once('controller/CartController.php');
            $cartController = new CartController();
            $cartController->deleteCart($id);
            break;
        case 'checkout':
            require_once('view/checkout.php');
            break;
        case 'pay':
            // if(isset($_POST['thanhtoan'])&&($_POST['thanhtoan'])){
            //     $name = $_POST['name'];
            //     $email = $_POST['email'];
            //     $phone = $_POST['phone'];
            //     $address = $_POST['address'];
            //     $ngaydathang=date('h:i:sa d/m/Y');
            //     $total = $_POST['total'];
                
            // }
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
        case 'logout':
            session_destroy();
            header('Location: index.php');
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
        case 'User_profile':    
            require_once('view/User_profile.php');    
            break;       
        case 'search':
            if(isset($_POST['search'])&&($_POST['search']!="")){
                $search = $_POST['search'];
            }else{
                $search = "";
            }
            require_once('controller/ProductController.php');
            $productController = new ProductController();
            $productController->renderSearch($search);
            break;
        case 'editUser':
            
            break;
        default: 
            echo "Trang không tồn tại";
            break;
    }
    require_once('view/footer.php');
    ob_end_flush(); 
?>
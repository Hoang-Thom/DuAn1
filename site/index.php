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
            require_once('controller/ProductController.php');
            $productController = new ProductController();
            $productController->renderShop();
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
        case 'login':
            require_once('view/login.php');
            break;
        case 'register':
            require_once('view/register.php');
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
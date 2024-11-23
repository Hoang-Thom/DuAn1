<?php

    require_once('view/header.php');
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    // echo $page;
    switch($page){
        case 'home':
            require_once('view/home.php');
            break;
        case 'shop':
            require_once('view/shop.php');
            break;
        case 'cart':
            echo "Trang cart";
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
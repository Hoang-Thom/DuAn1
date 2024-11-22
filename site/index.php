<?php

    require_once('view/header.php');
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    // echo $page;
    switch($page){
        case 'home':
            require_once('view/home.php');
            break;
        case 'shop':
            echo "Trang shop";
            break;
        case 'cart':
            echo "Trang cart";
            break;
        case 'blog':
            echo "Trang bài viết";
            break;
        default: 
            echo "Trang không tồn tại";
            break;
    }
    require_once('view/footer.php');
?>
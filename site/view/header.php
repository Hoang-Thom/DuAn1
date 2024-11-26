<?php

ob_start(); // Bắt đầu buffer output

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetCakes</title>
    <link rel="stylesheet" href="../public/css/site/home.css">
    <link rel="stylesheet" href="../public/css/site/login.css">
    <link rel="stylesheet" href="../public/css/site/register.css">
    <link rel="stylesheet" href="../public/css/site/forget.css">
    <link rel="stylesheet" href="../public/css/site/blog.css">
    <link rel="stylesheet" href="../public/css/site/cart.css">
    <link rel="stylesheet" href="../public/css/site/shop.css">
    <link rel="stylesheet" href="../public/css/site/checkout.css">
    <link rel="stylesheet" href="../public/css/site/pay.css">
    <link rel="stylesheet" href="../public/css/site/detail.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400..800&family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Edu+AU+VIC+WA+NT+Guides:wght@400..700&family=Edu+NSW+ACT+Foundation:wght@400..700&family=Pacifico&family=Playwrite+BE+VLG:wght@100..400&family=Playwrite+FR+Moderne:wght@100..400&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400..800&family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Edu+AU+VIC+WA+NT+Guides:wght@400..700&family=Edu+NSW+ACT+Foundation:wght@400..700&family=Imperial+Script&family=Marck+Script&family=Pacifico&family=Playwrite+BE+VLG:wght@100..400&family=Playwrite+FR+Moderne:wght@100..400&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Send+Flowers&family=Solitreo&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="head1">
            <a href="?page=home"><img class="logo" src="../public/img/Logo Green.png" alt="Logo SweetCakes"></a>
        </div>
        <div class="head2">
            <ul>
                <li><a href="?page=home">Trang chủ</a></li>
                <li><a href="?page=about">Giới thiệu</a></li>
                <li><a href="?page=shop">Sản phẩm</a></li>
                <li><a href="?page=blog">Bài viết</a></li>
                <li><a href="?page=contact">Liên hệ</a></li>
            </ul>
        </div>
        <div class="head3">
            <ul>
                <li>
                    <form action="">
                        <input type="text" placeholder="Tìm kiếm">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </li>
                <li>
                    <a class="cart-quantity" href="?page=cart">
                        <img src="../public/img/shopping-cart.png" alt="Cart">
                        <span>
                            <?php 
                                $total = 0;
                                if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                                    foreach($_SESSION['cart'] as $p) { 
                                        $total += $p['quantity'];
                                    } 
                                }
                                echo $total;
                            ?>
                        </span>
                    </a>
                </li>
                <li><a href="?page=loginpage"><img src="../public/img/user.png" alt="User"></a></li>
            </ul>
        </div>
    </header>

<?php
ob_end_flush(); // Kết thúc buffer output
?>
<?php
    require_once ('view/header.php');
    //home
    require_once('controller/HomeController.php');
    $HomeController = new HomeController();
    //danh muc
    require_once('controller/CategoryController.php');
    $CategoryController = new CategoryController();
    //san pham
    require_once('controller/ProductController.php');
    $ProductController = new ProductController();
    //don hang
    require_once('controller/OderController.php');
    $OderController = new OderController();
    //tai khoan
    require_once('controller/AccountController.php');
    $AccountController = new AccountController();
    //bai viet
    require_once('controller/ArticleController.php');
    $ArticleController = new ArticleController();
    //binh luan
    require_once('controller/CommentController.php');
    $CommentController = new CommentController();
    //khuyen mai
    require_once('controller/SaleController.php');
    $SaleController = new SaleController();
    //CTDH
    require_once('controller/CTDHController.php');
    $CTDHController = new CTDHController();

    $page=$_GET ['page'] ?? 'home';
    switch ($page){
        case "home":
            $HomeController->renderHome();
            //require_once('view/home.php');
            break;
        // them sua xoa danh muc
        case "Category":
            $CategoryController->renderCategory();
            break;
        case "showaddcate":
            $CategoryController->renderaddcate();
            break;
        case "addcate":
            $data=$_POST;
            $data['anhdanhmuc'] = $_FILES['anhdanhmuc']['name'];
            move_uploaded_file($_FILES['anhdanhmuc']['tmp_name'],"../public/img".$_FILES['anhdanhmuc']['name']);
            $CategoryController->addCategory($data);
            break;
        case "deletecate":
            $id=$_GET['id'];
            $CategoryController->deleteCategory($id);
            break;
        case "showeditcate":
            $id=$_GET['id'];
            $CategoryController->renderEditCate($id);
            break;
        case "editcate":
            $data=$_POST;
            $data['anhdanhmuc'] = $_FILES['anhdanhmuc']['name'];
            move_uploaded_file($_FILES['anhdanhmuc']['tmp_name'],"../public/img".$_FILES['anhdanhmuc']['name']);
            $id=$_GET['id'];
            $data['id']=$_GET ['id'];
            $CategoryController->editCategory($data);
            break;
        //them sua xoa san pham
        case "Product":
            $ProductController->renderProduct();
            break;
        case "showaddpro":
            $ProductController->renderaddpro();
            break;
        case "addPro":
            $data=$_POST;
            $data['Anh_san_pham'] = $_FILES['Anh_san_pham']['name'];
            move_uploaded_file($_FILES['Anh_san_pham']['tmp_name'],"../public/img".$_FILES['Anh_san_pham']['name']);
            $ProductController->addProduct($data);
            break;
        case "showeditpro":
            $id=$_GET['id'];
            $ProductController->renderEditpro($id);
            break;
        case "editpro":
            $data=$_POST;
           $data['Anh_san_pham'] = $_FILES['Anh_san_pham']['name'];
            move_uploaded_file($_FILES['Anh_san_pham']['tmp_name'],"../public/img".$_FILES['Anh_san_pham']['name']);
            $id=$_GET['id'];
            $data['id']=$_GET ['id'];
            $ProductController->editProduct($data);
            break;
        case "deletepro":
            $id=$_GET['id'];
            $ProductController->deleteProduct($id);
            break;
        //xem don hang
        case "Oder":
            if(isset($_POST['xacnhan']) && $_POST['xacnhan'] == "XacNhan") {
                // doi trsng thai don hang qua 2
                //echo $_POST['ID_donhang'];
                $data['ID_donhang']=$_POST['ID_donhang'];
                $data['Trang_thai']=2;
                $OderController->editOder($data);
                //exit;
            
            } else if(isset($_POST['huy'])  && $_POST['huy'] == "Huy") {
                // doi trsng thai don hang qua 0
                $data['ID_donhang']=$_POST['ID_donhang'];
                $data['Trang_thai']=0;
                //var_dump($data);exit;
                $OderController->editOder($data);
            }
            $OderController->renderOder();
            break;
        case "CTDH":
            $CTDHController->renderCTDH();
            require_once ('view/CTDH.php');
            break;
        //them sua xoa tai khoan
        case "Account":
            $AccountController->renderAccount();
            break;
        case "showaddAcc":
            $AccountController->renderaddAcc();
            break;
        case "addAccount":
            $data=$_POST;
            $AccountController->addAccount($data);
            break;
        //them sua xoa bai viet
        case "Article":
            $ArticleController->renderArticle();
            break;
        case "showaddArt":
            $ArticleController->renderaddArt();
            break;
        case "addArt":
            $data=$_POST;
            $data['Hinh_anh'] = $_FILES['Hinh_anh']['name'];
            move_uploaded_file($_FILES['Hinh_anh']['tmp_name'],"../public/img".$_FILES['Hinh_anh']['name']);
            $ArticleController->addArticle($data);
            break;
        case "showeditArt":
            $id=$_GET['id'];
            $ArticleController->renderEditArt($id);
            break;
        case "editArt":
            $data=$_POST;
            $data['Hinh_anh'] = $_FILES['Hinh_anh']['name'];
            move_uploaded_file($_FILES['Hinh_anh']['tmp_name'],"../public/img".$_FILES['Hinh_anh']['name']);
            $data['id']=$_GET ['id'];
            $ArticleController->editArticle($data);
            break;
        case "deleteArticle":
            $id=$_GET['id'];
            $ArticleController->deleteArticle($id);
            break;
        //xoa binh luan
        case "Comment":
            $CommentController->renderComment();
            break;
        case "deleteComment":
            $id=$_GET['id'];
            $CommentController->deleteComment($id);
            break;
        //them sua xoa khuyen mai
        case "Sale":
            $SaleController->renderSale();
            break;
        case "showaddsal":
            $SaleController->renderaddsal();
            break;
        case "addSale":
            $data=$_POST;
            $SaleController->addSale($data);
            break;
        case "showeditSale":
            $id=$_GET['id'];
            $SaleController->renderEditSale($id);
            break;
        case "editSale":
            $data=$_POST;
            $id=$_GET['id'];
            $data['id']=$_GET ['id'];
            $SaleController->editSale($data);
            break;
        case "deleteSale":
            $id=$_GET['id'];
            $SaleController->deleteSale($id);
            break;
        case "CTDH":
            $CTDHController->renderCTDH();
            break;
            default: 
        echo "Trang không tồn tại";
        break;
    }
    require_once ('view/footer.php');
?>
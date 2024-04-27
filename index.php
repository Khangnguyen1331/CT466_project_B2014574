
<?php


ob_start();
session_start();
    include "./admin/model/product.php";
    include "./admin/model/category.php";
    include "./db/connect.php";
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=[];
    }

    if(!isset($_SESSION['role'])){
        include "./modules/user/login.php";
    }
    
    // require 'lib/template.php';
    // require 'lib/data.php';
    // require 'data/post.php';
    // require 'data/product.php';
    include "./inc/header.php";
    // require 'inc/header.php';
    if(isset($_GET['act'])&&$_GET['act']){
    switch ($_GET['act']) {
        case 'home':
            include "./modules/view/main.php";
            break;
        
        case 'category_pd':
            include "./modules/view/category_pd.php";
            break;

        case 'contact':
            include "./modules/view/contact.php";
            break;
            

        case 'detail':
            include "./modules/view/detail.php";
            break;
            
        case 'aboutus':
            include "./modules/view/aboutus.php";
            break;

        case 'aboutus':
            include "/modules/view/detail.php";
            break;
            
        case 'cart': 
            

            include "./modules/view/cart.php";
            break;
            
            
        case 'login':
            include "./modules/user/login.php";
            break;
            
            
        case 'register':
            include "./modules/user/register.php";
            break;
            
        case 'category':
            include "./admin/category/index.php";
            break;
            
            
        default:
            include "./modules/user/login.php";
            break;
        }
        }

    include "./inc/footer.php";
?>


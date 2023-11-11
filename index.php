<?php
    include "view/header.php";
    if(isset($_GET["act"])&& $_GET["act"] != ""){
        $act = $_GET['act'];
        switch($act){
            case 'about':
                include "view/about.php";
            break;
            case 'blog':
                include "view/blog.php";
            break;
            case 'shop':
                include "view/shop.php";
            break;
            case 'login':
                include "view/login.php";
            break;
            case 'resignter':
                include "view/resignter.php";
            break;
            case 'spct':
                include "view/spct.php";
            break;
            default:
                include "view/home.php";
            break;
        } 
    }else{
        include "view/home.php";
    }  
    include "view/footer.php";
?>
<?php
    include "boxmenu.php";

    
    if(isset($_GET["act"])&& $_GET["act"] != ""){
        $act = $_GET['act'];
        switch($act){
            case 'dashboards':
                include "dashboards/dashboards.php";
            break;

            case 'order':
                include "qldonhang/order.php";
            break;

            case 'caterogies':
                include "qldanhmuc/caterogies.php";
            break;

            case 'products':
                include "qlsanpham/Products.php";
            break;
            
            case 'user':
                include "qlthanhvien/user.php";
            break;

            default:
                include "boxcontent.php";
            break;
        } 
    }else{
        include "boxcontent.php";
    }  
?>
<?php
    include "boxmenu.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
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
                if(isset($_GET['id']) && ($_GET['id'] >0)) {
                    select_all_danhmuc($_GET['id']);
                }
                $lisdm = select_all_danhmuc();
                include "qldanhmuc/caterogies.php";
            break;

            case 'addDm':
                if(isset($_POST['addDm']) && ($_POST['addDm'])){
                    $name = $_POST['name'];
                    insert_danhmuc($name);
                    $thongbao = "Thêm danh mục mới thành công";
                }
                include "qldanhmuc/addDanhmuc.php";
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
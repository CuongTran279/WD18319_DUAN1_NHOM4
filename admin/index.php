<?php
    include "boxmenu.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    if(isset($_GET["act"])&& $_GET["act"] != ""){
        $act = $_GET['act'];
        switch($act){
            case 'dashboards':
                include "dashboards/dashboards.php";
            break;

            case 'order':
                include "qldonhang/order.php";
            break;

// Danh mục
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
// Danh mục

// Sản phẩm
            case 'products':
                if(isset($_POST['timSp']) && ($_POST['timSp'])){
                    $kyw = $_POST['kyw'];
                    $id_categories = $_POST['id_categories'];
                }else{
                    $kyw ='';
                    $id_categories = 0;
                }
                $lisdm = select_all_danhmuc();
                $lissp = select_all_products($kyw,$id_categories);
                include "qlsanpham/Products.php";
            break;
            case 'addSp':
                if(isset($_POST['addSp']) && ($_POST['addSp'])){
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $id_categories = $_POST['id_categories'];
                    $img = $_FILES['image']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    insert_sanpham($name,$price,$img,$description,$id_categories);
                    $thongbao = "Thêm sản phẩm mới thành công";
                }
                $lisdm = select_all_danhmuc();
                include "qlsanpham/addProduct.php";
            break;
            
// Sản phẩm
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
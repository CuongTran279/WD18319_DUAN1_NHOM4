<?php
    include "boxmenu.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/binhluan.php";
    if(isset($_GET["act"])&& $_GET["act"] != ""){
        $act = $_GET['act'];
        switch($act){
            case 'dashboards':
                include "dashboards/dashboards.php";
            break;

            case 'order':
                include "qldonhang/order.php";
            break;
//Bình luận
            case 'comment':
                $lisbl = binhluan_select_all(0);
                include "qlbinhluan/comment.php";
            break; 
            case 'xoaBl':
                if(isset($_GET['id']) && ($_GET['id'] >0)) {
                    $id = $_GET['id'];
                    binhluan_delete($id);
                }
                $lisbl = binhluan_select_all(0);
                include "qlbinhluan/comment.php";
            break;
//Bình luận
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
            case 'xoaDm':
                if(isset($_GET['id']) && ($_GET['id'] >0)) {
                    $id = $_GET['id'];
                    delete_danhmuc($_GET['id']);
                }
                $lisdm = select_all_danhmuc();
                include "qldanhmuc/caterogies.php";
            break;
            case 'suaDm':
                if(isset($_GET['id']) && ($_GET['id'] >0)) {
                    $dm = select_id_danhmuc($_GET['id']);
                }
                $lisdm = select_all_danhmuc();
                include "qldanhmuc/updateDanhmuc.php";
            break;
            case 'updtDm':
                if(isset($_POST['updtDm']) && ($_POST['updtDm'])){
                    $name = $_POST['name'];
                    $id = $_POST['id'];
                    update_danhmuc($name,$id);
                    $thongbao = "Cập nhật thanh cong";
                }
                $lisdm = select_all_danhmuc();
                include "qldanhmuc/caterogies.php";
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
            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id'] >0)) {
                    $id = $_GET['id'];
                    delete_products($_GET['id']);
                }
                $lisdm = select_all_danhmuc();
                $lissp = select_all_products();
                include "qlsanpham/Products.php";
            break;
            case 'suasp':
                if(isset($_GET['id']) && ($_GET['id'] >0)) {
                    $sp = select_id_products($_GET['id']);
                }
                $lisdm = select_all_danhmuc();
                include "qlsanpham/updateSanPham.php";
            break;
            case 'updtSp':
                if(isset($_POST['updtSp']) && ($_POST['updtSp'])){
                    $name = $_POST['name'];
                    $id_categories = $_POST['id_categories'];
                    $id = $_POST['id'];
                    $price = $_POST['price'];
                    $description= $_POST['description'];
                    $img = $_FILES['image']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                    } else {
                      //echo "Sorry, there was an error uploading your file.";
                    }
                    update_products($name,$id_categories,$price,$description,$img,$id);
                    $thongbao = "Cập nhật thanh cong";
                }
                $lissp = select_all_products();
                include "qlsanpham/Products.php";
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
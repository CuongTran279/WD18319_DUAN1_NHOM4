<?php
    include "boxmenu.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/binhluan.php";
    include "../model/taikhoan.php";
    include "../model/cart.php";
    include "../model/thongke.php";
    
    $slsp = count_sp();
    $sltk = count_tk();
    $sldm = count_dm();
    $sldh = count_dh();
    $sp_dm = count_sp_dm();
    $tk2 = slsp();
    if(isset($_GET["act"])&& $_GET["act"] != ""){
        $act = $_GET['act'];
        switch($act){
//Thống kê
            case 'dashboards':
                include "dashboards/dashboards.php";
            break;
            case 'dashboards':
                include "dashboards/dashboards.php";
            break;

//Đơn hàng
            case 'order':
                $lisCart = select_all_cart();
                include "qldonhang/order.php";
            break;
            case 'suaDh':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    $cart = select_id_cart($id);
                }
                $lisCart = select_all_cart();
                include "qldonhang/ctorder.php";
            break;
            case 'updtDh':
                if(isset($_POST['updtDh']) && ($_POST['updtDh'])){
                    $id = $_POST['id'];
                    $trangthai = $_POST['trangthai'];
                    update_trangthai($trangthai,$id);
                }
                $lisCart = select_all_cart();
                include "qldonhang/order.php";
            break;
//Đơn hàng

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
                    header("Location:index.php?act=products");
                }
                $lissp = select_all_products();
                include "qlsanpham/Products.php";
            break;
// Sản phẩm

//user
            case 'user':
                $listk = select_all_user();
                include "qlthanhvien/user.php";
            break;
            case 'xoatk':
                if(isset($_GET['id']) && ($_GET['id'] >0)) {
                    $id = $_GET['id'];
                    delete_user($id);
                }
                $listk = select_all_user();
                include "qlthanhvien/user.php";
            break;
            case 'suatk':
                if(isset($_GET['id']) && ($_GET['id'] >0)) {
                    $tk = select_id_user($_GET['id']);
                }
                $listk = select_all_user();
                include "qlthanhvien/updtuser.php";
            break;
            case 'updtTk':
                if(isset($_POST['updtTk']) && ($_POST['updtTk'])){
                    $id = $_POST['id'];
                    $role = $_POST['role'];
                    update_user($role,$id);
                    $thongbao = "Cập nhật thanh cong";
                }
                $listk = select_all_user();
                include "qlthanhvien/user.php";
            break;
            default:
                include "dashboards/dashboards.php";
            break;
        } 
    }else{
        include "dashboards/dashboards.php";
    }  
?>

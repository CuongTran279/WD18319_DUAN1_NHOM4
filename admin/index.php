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
    $tt12 =  sum_dt();
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
                    $cart = select_id_cart($id);
                    $trangthai = $_POST['trangthai'];
                    if($trangthai < $cart[0]['trangthai']){
                        echo '<script type="text/javascript"> window.onload = function () { alert("Không thể thay đổi trạng thái đơn hàng, vui lòng kiểm tra logic"); }</script>';
                        include "qldonhang/ctorder.php";
                    }else{
                        update_trangthai($trangthai,$id);
                        echo '<script type="text/javascript"> window.onload = function () { alert("Update thành công"); }</script>';
                        $lisCart = select_all_cart();
                        include "qldonhang/order.php";
                    }
                    
                }
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
                    echo '<script type="text/javascript"> window.onload = function () { alert("Xóa thành công"); }</script>';
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
                    echo '<script type="text/javascript"> window.onload = function () { alert("Thêm thành công"); }</script>';
                }
                include "qldanhmuc/addDanhmuc.php";
            break;
            case 'xoaDm':
                if(isset($_GET['id']) && ($_GET['id'] >0)) {
                    $id = $_GET['id'];
                    delete_danhmuc($_GET['id']);
                    echo '<script type="text/javascript"> window.onload = function () { alert("Xóa thành công"); }</script>';
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
                    echo '<script type="text/javascript"> window.onload = function () { alert("Update thành công"); }</script>';
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
                    echo '<script type="text/javascript"> window.onload = function () { alert("Thêm thành công"); }</script>';
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
                echo '<script type="text/javascript"> window.onload = function () { alert("Xóa thành công"); }</script>';
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
                    echo '<script type="text/javascript"> window.onload = function () { alert("update thành công"); }</script>';
                }
                $lissp = select_all_products();
                $lisdm = select_all_danhmuc();
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
                    echo '<script type="text/javascript"> window.onload = function () { alert("Xóa thành công"); }</script>';
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
                    echo '<script type="text/javascript"> window.onload = function () { alert("update thành công"); }</script>';
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

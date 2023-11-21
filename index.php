<?php
session_start();
include "model/pdo.php";
include "view/header.php";
include "global.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/sanpham.php";
$spnew = select_all_home_products();
$dsdm = select_all_danhmuc();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
if (isset($_GET["act"]) && $_GET["act"] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'about':
            include "view/about.php";
            break;
        case 'blog':
            include "view/blog.php";
            break;
        case 'shop':
            include "view/shop.php";
            break;
        case 'sanpham':
            if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }else{
                $kyw = "";
            }
            if(isset($_GET['id_categories']) && ($_GET['id_categories']>0)){
                $id_categories = $_GET['id_categories'];
            }else{
                $id_categories = 0;
            }
            $dssp = select_all_products($kyw,$id_categories);
            $tendm =sanpham_tendm_select_by_id($id_categories);
            include "view/spcdm.php";
        break;
        case 'spct':
            if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                $id = $_GET['idsp'];
                $one = select_id_products($id);
                extract($one);
                $spcl = sanpham_select_cungloai($id,$id_categories);
                include "view/spct.php";
            }else{
                include "view/shop.php";
            }
        break;
            // Dang nhap-dang ky ---------------------------------------------
        case 'login':
            $errName = $errPass = "";
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $name = $_POST['name'];
                $password = $_POST['pass'];
                $check = check_taikhoan($name, $password);
                if (empty($name)) {
                    $errName = "Vui lòng nhập tên";
                }
                if (empty($password)) {
                    $errPass = "Vui lòng nhập pass";
                }
                if (is_array($check)) {
                    $_SESSION['user'] = $check;
                    header("Location:index.php");
                } else {
                    if(!empty($name) && !empty($password)){
                        $thongbao = "Thông tin không đúng, vui lòng kiểm tra lại";
                    }
                }
            }
            include "view/login.php";
            break;
        case 'dangky':
            $errEmail = $errName = $errPass = $errRepass = $errAddress = $errPhone = "";
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $name = $_POST['name'];
                $password = $_POST['pass'];
                $re_pass = $_POST['re_pass'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                if (empty($email)) {
                    $errEmail = "Vui lòng nhập email";
                }
                if (empty($address)) {
                    $errAddress = "Vui lòng nhập địa chỉ";
                }
                if (empty($name)) {
                    $errName = "Vui lòng nhập tên";
                }
                if (empty($password)) {
                    $errPass = "Vui lòng nhập pass";
                }
                if (empty($phone)) {
                    $errPhone = "Vui lòng nhập SĐT";
                }
                if (empty($re_pass)) {
                    $errRepass = "Vui lòng nhập lại mật khẩu";
                }

                if ($re_pass != "" && $password != "" && $name != "") {

                    $tk = check_taikhoan($name, $password);
                    if ($re_pass !== $password) {
                        $errRepass = "Vui lòng nhập lại mật khẩu";
                    }
                    if (empty($tk['name'])) {
                        $errName = "Tên hợp lệ ";
                    } else {
                        if ($re_pass !== $password && $name == $tk['name']) {
                            $errRepass = "Vui lòng nhập lại mật khẩu";
                            $errName = "Tên đã tồn tại";
                        }
                    }
                    if ($re_pass == $password && empty($tk['name'])) {
                        insert_taikhoan($name, $password, $email, $phone, $address);
                        $thongbao = "Đăng ký thành công";
                    }
                }
            }
            include "view/resignter.php";
            break;
        case 'out':
            session_unset();
            header("Location:index.php");
        break;
// cart ----------
        case 'cart':
            include "view/cart.php";
        break;
        case 'addCart':
            include "view/cart.php";
        break;
        case 'spct':
            include "view/spct.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";

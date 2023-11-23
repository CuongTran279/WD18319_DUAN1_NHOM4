<?php
session_start();
include "model/pdo.php";
include "view/header.php";
include "global.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/cart.php";
$spnew = select_all_home_products();
// if(!isset($_SESSION['user'])){
//     $_SESSION['user'] = array();
// }
//var_dump($_SESSION['user']);exit;
$dsdm = select_all_danhmuc();
    function updtCart($add = false){
            foreach($_POST['quantity'] as $id => $quantity){
                    if($add){
                        $_SESSION['cart'][$id] += $quantity;
                    }else{
                        $_SESSION['cart'][$id] = $quantity;
                    }
            }
        // }else{
        //     echo '<script type="text/javascript"> window.onload = function () { alert("Giỏ hàng rỗng, vui lòng mua hàng"); }</script>';
        // }
    }
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
            if(empty($_SESSION['cart'])){
                echo '<script type="text/javascript"> window.onload = function () { alert("Giỏ hàng rỗng, vui lòng mua hàng"); }</script>';
            }else{
                $testcart = cart_test();
                if(isset($_POST['updtQuantt'])){
                updtCart();
            }
            }
            include "view/cart.php";
        break;
        case 'addCart':
            if(isset($_POST['addCart']) && ($_POST['addCart'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $img = $_POST['img'];
                updtCart(true);
                header("Location:index.php?act=cart");
            }
            if(!empty($_SESSION['cart'])){
                $testcart = cart_test();
            }
            include "view/cart.php";
        break;
        case 'delCart':
            if(isset($_GET['id'])){
                unset($_SESSION['cart'][$_GET['id']]);
            }else{
                $_SESSION['cart']=[];
            }
            header("Location:index.php?act=cart");
        break;
        case 'datHang':
            $errEmail = $errName = $errPass = $errRepass= $errPttt = $errAddress = $errPhone = "";
            if(!empty($_SESSION['cart'])){
                $testcart = cart_test();
            }else{
                echo '<script type="text/javascript"> window.onload = function () { alert("Giỏ hàng rỗng, vui lòng mua hàng"); }</script>';
            }
            if(isset($_POST['datHang']) && ($_POST['datHang'])){
                $email = $_POST['email'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $pttt = $_POST['pttt'];
                if (empty($email)) {
                    $errEmail = "Vui lòng nhập email";
                }
                if (empty($address)) {
                    $errAddress = "Vui lòng nhập địa chỉ";
                }
                if (empty($name)) {
                    $errName = "Vui lòng nhập tên";
                }
                if (empty($phone)) {
                    $errPhone = "Vui lòng nhập SĐT";
                }
                if ($pttt == 0) {
                    $errPttt = "Vui lòng chọn pttt";
                }
                if(!empty($email) && !empty($address) && !empty($name) && !empty($phone) && $pttt>0){
                    $testcart = cart_test();
                    $tt = 0;
                    $order = array();
                    if(empty($_SESSION['cart'])){
                        echo '<script type="text/javascript"> window.onload = function () { alert("Giỏ hàng rỗng, vui lòng mua hàng"); }</script>';
                    }else{
                    foreach($testcart as $item){
                        extract($item);
                        $order[] = $item;
                        $tt += $price * $_SESSION['cart'][$id];
                    }
                    $dburl = "mysql:host=localhost;dbname=wd18319_duan1_team4;charset=utf8";
                    $username = 'root';
                    $password = '';
                    $conn = new PDO($dburl, $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql1 = "SELECT * FROM user WHERE name = '".$_SESSION['user']['name']."'";
                    $tk = pdo_query_one($sql1);
                    $userId = $tk['id'];
                    $sql = "INSERT INTO cart(id_user, total, pttt) VALUES ('$userId','$tt', '$pttt') ";
                    $conn->exec($sql);
                    $id_cart = $conn->lastInsertId();
                    
                    $noisql = "";
                    $num = 0;
                    updtCart();
                    foreach($order as $key=>$product){
                        //var_dump($order);exit;
                        $noisql .= "('$id_cart','" . $product['id'] . "','" . $product['price'] . "','" . $product['img'] . "','" . $product['name'] . "','" . $_SESSION['cart'][$product['id']] . "')";
                        if($key != (count($order) - 1)){
                            $noisql .= ",";
                        }
                    }
                    $sql2 = "INSERT INTO cart_details(id_cart, id_pro, price, img, name, quantity) VALUES ".$noisql." ";
                    pdo_execute($sql2);
                    unset($_SESSION['cart']);
                }}
            }include "view/cfCart.php";
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

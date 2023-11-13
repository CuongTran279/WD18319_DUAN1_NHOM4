<?php
    include "model/pdo.php";
    include "view/header.php";
    include "model/taikhoan.php";
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
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email =$_POST['email'];
                    $name =$_POST['name'];
                    $password =$_POST['pass'];
                    $re_pass =$_POST['re_pass'];
                    $phone =$_POST['phone'];
                    $address =$_POST['address'];
                    if($re_pass != $password){
                        $thongbao = "Đăng ký không thành công. Nhập lại tài khoản phải giống tài khoản gốc";
                    }else{
                        insert_taikhoan($name,$password,$email,$phone,$address);
                    $thongbao = "Đăng ký thành công";
                    }
                }
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
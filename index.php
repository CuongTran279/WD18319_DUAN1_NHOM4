<?php
    session_start();
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
            // Dang nhap-dang ky
            case 'login':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $name =$_POST['name'];
                    $password =$_POST['pass'];
                    $check = check_taikhoan($name,$password);
                    if(is_array($check)){
                        $_SESSION['user'] = $check;
                        header("Location:index.php");
                    }else{
                        $thongbao ="Tài khoản không tồn tại, vui lòng kiểm tra lại";
                    }
                }
                include "view/login.php";
            break;
            case 'dangky':
                $errEmail = $errName = $errPass = $errRepass = $errAddress = $errPhone = "";
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email =$_POST['email'];
                    $name =$_POST['name'];
                    $password =$_POST['pass'];
                    $re_pass =$_POST['re_pass'];
                    $phone =$_POST['phone'];
                    $address =$_POST['address'];
                    // if(empty($email)){
                    //     $errEmail = "Vui lòng nhập email";
                    // }
                    // if(empty($address)){
                    //     $errAddress = "Vui lòng nhập địa chỉ";
                    // }
                    // if(empty($name)){
                    //     $errName = "Vui lòng nhập tên";
                    // }
                    // if(empty($password)){gi
                    //     $errPass = "Vui lòng nhập pass";
                    // }
                    // if(empty($phone)){
                    //     $errPhone = "Vui lòng nhập SĐT";
                    // }
                    // if(empty($re_pass)){
                    //     $errRepass = "Vui lòng nhập lại mật khẩu";
                    // }
                    // if(!empty($email) && !empty($address) && !empty($name) && !empty($pass) && !empty($phone) && !empty($re_pass)){
                    //     // $tk = check_taikhoan($name,$password);
                        // if($re_pass !== $password){
                        //     $errRepass = "Vui lòng nhập lại mật khẩu";}
                        // if($name !== $tk['name']){
                        //     $errName = "Tên hợp lệ ";
                        // }else{
                        //     if($re_pass !== $password && $name == $tk['name']){
                        //         $errRepass = "Vui lòng nhập lại mật khẩu";
                        //         $errName = "Tên đã tồn tại";
                        //     }
                        // }
                        // if($re_pass == $password && $name !== $tk['name']){
                            insert_taikhoan($name,$password,$email,$phone,$address);
                            $thongbao = "Đăng ký thành công";
                        
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
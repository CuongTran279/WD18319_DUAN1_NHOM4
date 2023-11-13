<?php
    require_once "pdo.php";
    function insert_taikhoan($name,$password,$email,$phone,$address){
        $sql = "INSERT INTO user(name, pass, email, phone, address) VALUES ('$name','$password','$email','$phone','$address')";
        pdo_execute($sql);
    }
?>
<?php
    require_once "pdo.php";
    function insert_taikhoan($name,$password,$email,$phone,$address){
        $sql = "INSERT INTO user(name, pass, email, phone, address) VALUES ('$name','$password','$email','$phone','$address')";
        pdo_execute($sql);
    }
    function check_taikhoan($name,$password){
        $sql = "SELECT * FROM user WHERE name = '".$name."' AND pass = '".$password."'";
        $tk = pdo_query_one($sql);
        return $tk;
    }
?>
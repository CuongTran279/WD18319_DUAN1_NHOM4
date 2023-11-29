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
    function check_taikhoan_name(){
            if(isset($_SESSION['user'])){
                $sql = "SELECT * FROM user WHERE name = '".$_SESSION['user']['name']."'";
                $tk = pdo_query_one($sql);
                return $tk;
            }else{
                $_SESSION['user'] = array();
            }
    }
    function SELECT_USERID(){
        $sql = "SELECT * FROM user WHERE id =".$_SESSION['user']['id']." ";
        $listk = pdo_query_one($sql);
        return $listk;
    }
    function select_all_user(){
        $sql = "SELECT * FROM user order by id desc ";
        $listk = pdo_query($sql);
        return $listk;
    }
    function delete_user($id){
        $sql = "DELETE FROM user WHERE id=".$id;
        pdo_execute($sql);
    }
    function select_id_user($id){
        $sql = "SELECT * FROM user where id=".$id;
        $tk = pdo_query_one($sql);
        return $tk;
    }
    function update_user($role,$id){
        $sql = "UPDATE user SET role = '$role' WHERE id =".$id;
        pdo_execute($sql);
    }
    function updtTk($name,$phone,$address,$img,$email,$id){
            $sql = "UPDATE user SET name = '$name', phone = '$phone' , address = '$address ', img = '$img', email = '$email' WHERE id =".$id;
        pdo_execute($sql);
    }
?>
<?php
    require_once "pdo.php";
    function insert_danhmuc($name){
        $sql = "INSERT INTO categories(name) VALUES ('$name')";
        pdo_query($sql);
    }
    function select_all_danhmuc(){
        $sql = "SELECT * FROM categories order by id";
        $lisdm = pdo_query($sql);
        return $lisdm;
    }
?>
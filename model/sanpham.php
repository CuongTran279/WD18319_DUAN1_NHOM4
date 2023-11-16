<?php
    require_once "pdo.php";
    function insert_sanpham($name,$price,$img,$description,$id_categories){
        $sql = "INSERT INTO products(name, price, img, description,id_categories) VALUES ('$name','$price','$img','$description','$id_categories')";
        pdo_query($sql);
    }
    function select_all_products($kyw="",$id_categories=0){
        $sql = "SELECT * FROM products WHERE 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($id_categories > 0){
            $sql.=" and id_categories ='".$id_categories."%'";
        }
        $sql.=" order by id desc";
        $lissp = pdo_query($sql);
        return $lissp;
    }
?>
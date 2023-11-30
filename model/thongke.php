<?php
    require_once "pdo.php";
    function count_sp(){
        $sql = "SELECT count(id) as sp from products";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function count_dm(){
        $sql = "SELECT count(id) as dm from categories";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function count_tk(){
        $sql = "SELECT count(id) as tk from user";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function count_dh(){
        $sql = "SELECT count(id) as dh from cart";
        $sp = pdo_query_one($sql);
        return $sp;
    }
?>
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
    function delete_danhmuc($id){
        $sql = "DELETE FROM categories WHERE id=".$id;
        pdo_execute($sql);
    }
    function select_id_danhmuc($id){
        $sql = "SELECT * FROM categories where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($name,$id){
        $sql = "UPDATE categories SET name='".$name."' WHERE id =".$id;
        pdo_execute($sql);
    }
?>
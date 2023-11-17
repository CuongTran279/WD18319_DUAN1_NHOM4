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
    function delete_products($id){
        $sql = "DELETE FROM products WHERE id=".$id;
        pdo_execute($sql);
    }
    function select_id_products($id){
        $sql = "SELECT * FROM products where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_products($name,$id_categories,$price,$description,$img,$id){
        if($img != ""){
            $sql = "UPDATE products SET name='".$name."',id_categories='".$id_categories."',price='".$price."',description ='".$description."',img='".$img."' WHERE id =".$id;
        }else{
            $sql = "UPDATE products SET name='".$name."',id_categories='".$id_categories."',price='".$price."',description ='".$description."' WHERE id =".$id;
        }
        pdo_execute($sql);
    }
    function select_all_home_products(){
        $sql = "SELECT * FROM products WHERE 1 order by id desc limit 0,8";
        $lissp = pdo_query($sql);
        return $lissp;
    }
    // Sản phẩm trong 1 danh mục
    function sanpham_tendm_select_by_id($id_categories){
        if($id_categories>0){
            $sql = "SELECT * FROM categories where id=".$id_categories;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }       
    }

    // Sản phẩm cùng loại hiển thị trong trang ctsp
    function sanpham_select_cungloai($id,$id_categories){
        $sql = "SELECT * FROM products where id_categories = ".$id_categories." AND id <> ".$id;
        $lissp = pdo_query($sql);
        return $lissp;
    }
?>
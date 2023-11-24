<?php
    require_once "pdo.php";

    function insert_binhluan($id_pro,$id_user,$content,$date,$name_bl){
        $sql = "INSERT INTO comments(id_pro, id_user, content, date,name) VALUES ('$id_pro','$id_user','$content','$date','$name_bl')";
        pdo_execute($sql);
    }
    function binhluan_select_all($id_pro){
        $sql = "SELECT * FROM comments where 1";
        if($id_pro>0){
            $sql.=" and id_pro = '".$id_pro."'"; 
        }else{
            $sql.= " order by id desc";
        }
        $lisbl = pdo_query($sql);
        return $lisbl;
    }
    function binhluan_delete($id){
        $sql = "DELETE FROM comments WHERE id=".$id;
        pdo_execute($sql);
    }
    function name_bl($id_user){
        $sql = "SELECT * FROM user where id =".$id_user;
        $name_bl = pdo_query_one($sql);
        return $name_bl;
    }
?>
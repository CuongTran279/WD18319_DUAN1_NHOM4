<?php
    require_once "pdo.php";
    function cart_test(){
        if(empty($_SESSION['cart'])){
            echo '<script type="text/javascript"> window.onload = function () { alert("Giỏ hàng rỗng, vui lòng mua hàng"); }</script>';
        }else{
        $sql = "SELECT * FROM products WHERE id IN (" . implode(",", array_keys($_SESSION['cart'])) . ")";
        $testcart = pdo_query($sql);
        return $testcart;}
    }
    function insert_cart($userId, $tt, $pttt,$ten,$phone,$address,$email)
    {
        $sql = "INSERT INTO cart(id_user, total, pttt,name,tel,address,email) VALUES ('$userId','$tt', '$pttt','$ten','$phone','$address','$email') ";
        pdo_execute($sql);
    }
    function inser_cart_detail()
    {
        extract($item);
        $sql = "INSERT INTO cart_details(id_cart, id_pro, price, img, name, quantity) VALUES ('$id_cart','" . $item['id'] . "','" . $item['price'] . "','" . $item['img'] . "','" . $item['name'] . "','" . $_SESSION['cart'][$id] . "')";
        $test = pdo_execute($sql);
        return $test;
    }
    function select_all_cart(){
        $sql = "SELECT * FROM cart";
        $listCart = pdo_query($sql);
        return $listCart;
    }
    function select_id_cart($id){
        $sql = "SELECT cart.id,cart.pttt,cart.trangthai,cart.email,cart.name,cart.tel,cart.address,cart.total,cart_details.name as product_name,cart_details.price,cart_details.img,cart_details.quantity FROM cart INNER JOIN cart_details ON cart.id = cart_details.id_cart WHERE cart.id =".$id;
        $cart = pdo_query($sql);
        return $cart;
    }
    function update_trangthai($trangthai,$id){
        $sql = "UPDATE cart SET trangthai='".$trangthai."' WHERE id =".$id;
        pdo_execute($sql);
    }
    // function select_iduser_cart($id){
    //     $sql = "SELECT cart.id,cart.pttt,cart.trangthai,cart.email,cart.name,cart.tel,cart.address,cart.total,cart_details.name as product_name,cart_details.price,cart_details.img,cart_details.quantity FROM cart INNER JOIN cart_details ON cart.id = cart_details.id_cart WHERE cart.id_user =".$id;
    //     $cart = pdo_query($sql);
    //     return $cart;
    // }
    function select_iduser_each_cart($id){
        $sql = "SELECT cart.id,cart.pttt,cart.trangthai,cart.email,cart.name,cart.tel,cart.address,cart.total,cart_details.name as product_name,cart_details.price,cart_details.img,cart_details.quantity FROM cart INNER JOIN cart_details ON cart.id = cart_details.id_cart WHERE cart.id_user = $id group by cart.id desc";
        $cart = pdo_query($sql);
        return $cart;
    }
    function delete_cart($id){
        $sql = "DELETE FROM cart WHERE id=".$id;
        pdo_execute($sql);
    }
?>
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
function insert_cart($userId, $tt, $pttt)
{
    $sql = "INSERT INTO cart(id_user, total, pttt) VALUES ('$userId','$tt', '$pttt') ";
    pdo_execute($sql);
}
function inser_cart_detail()
{
    extract($item);
    $sql = "INSERT INTO cart_details(id_cart, id_pro, price, img, name, quantity) VALUES ('$id_cart','" . $item['id'] . "','" . $item['price'] . "','" . $item['img'] . "','" . $item['name'] . "','" . $_SESSION['cart'][$id] . "')";
    $test = pdo_execute($sql);
    return $test;
}

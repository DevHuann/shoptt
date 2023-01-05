<?php

session_start();
include("../../database/connect.php");


$id_khachhang = $_SESSION['id_khachhang'];
$magiohang = rand(0, 9999);
$insert_cart = " INSERT INTO `giohang`( `id_khachhang`, `ma_giohang`, `trangthai_giohang`) VALUES ('$id_khachhang ','$magiohang',1)";
$sql = mysqli_query($conn,$insert_cart);
if($sql){
    foreach($_SESSION['cart'] as $cart_item){
        $id_sanpham = $cart_item['masp'];
        $soluong = $cart_item['soluong'];
        $insert_cart_detail = "INSERT INTO `chitietgiohang`( `ma_giohang`, `id_sanpham`, `soluongmua`) VALUES ('$magiohang',' $id_sanpham',' $soluong')";
        $quey = mysqli_query($conn,$insert_cart_detail);
    }
}
unset($_SESSION['cart']);
header("Location:../index.php");
?>

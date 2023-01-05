<?php
if (isset($_GET['quanly'])) {

    $quanly=$_GET['quanly'];
} else {

    $quanly='';
}
if ($quanly==''){
    include("views/danhmuc.php");
    include("views/product.php");
}
if ($quanly=='quanlydanhmuc'){
    include("views/danhmuc.php");
    include("views/danhmucsp.php");
}
if ($quanly=='quanlysanpham'){
    include ("views/chitietsp.php");
}
if ($quanly=='quanlygiohang')
{
    include ("views/giohang.php");
}
?>

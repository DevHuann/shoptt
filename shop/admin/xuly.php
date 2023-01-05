<?php
session_start();
include("../database/connect.php");

?>
<?php

if(isset($_GET['code'])){
    $code = $_GET['code'];
    $sql = "UPDATE giohang set trangthai_giohang=0 where ma_giohang = $code";
    $query = mysqli_query($conn,$sql);
    header("Location:donhang.php");
}

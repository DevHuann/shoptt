<?php
session_start();
include("../../database/connect.php");

?>
<?php

if(isset($_POST['submit'])){
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";


    $sql = "SELECT * FROM `user` WHERE `taikhoan`='".$username."'AND `matkhau`= '".$password."' ";
    $query=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    $count =  mysqli_num_rows($query);
    if($count>0){
        $_SESSION['dangky'] = $username;
        $_SESSION['id_khachhang'] = $row['id'];
        header("location:../index.php");
    }
    else{
        header("location:login.php");
    }



    //echo $_SESSION['dangnhap'];



}


?>

<?php
include("../database/connect.php");

?>
<?php

$a=$_GET['id'];
$delete = "DELETE FROM danhmuc WHERE id_danhmuc='$a'";
$sql = mysqli_query($conn,$delete);
header("location:danhmucsanpham.php");
?>
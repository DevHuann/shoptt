<?php
include("../database/connect.php");

?>
<?php

$a=$_GET['id'];
$select = "select * from sanpham where masp=$a";
$query = mysqli_query($conn,$select);
while($row = mysqli_fetch_array($query)){
    unlink('uploads/'.$row['anh']);
}
$delete = "DELETE FROM sanpham WHERE masp='$a'";
$sql = mysqli_query($conn,$delete);

header("location:sanpham.php");
?>
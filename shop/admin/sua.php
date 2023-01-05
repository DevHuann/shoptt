<?php
include("../database/connect.php");

?>
<?php   $b=$_GET['id1']; ?>
<?php
//$sql = "SELECT * FROM loaisp";
//$ketqua = mysqli_query($conn,$sql);
?>
<?php
if(isset($_POST['sua'])){
    $tendanhmuc = isset($_POST['tendanhmuc'])?$_POST['tendanhmuc']:'';
    $thutu = isset($_POST['thutu'])?$_POST['thutu']:'';

 
if($tendanhmuc!=""&&$thutu!=""){
  $sql="UPDATE `danhmuc` SET `tendanhmuc`='$tendanhmuc',`thutu`='$thutu' where id_danhmuc='$b'";
 $query=mysqli_query($conn,$sql);
  header("location:danhmucsanpham.php");
}
}

$select="select * from danhmuc where id_danhmuc='$b'";
$result=mysqli_query($conn,$select);
$rows = mysqli_fetch_assoc($result);
?>
<div class="container mt-3">
  <h2>Sửa danh mục</h2> 
  <form action=""method="POST" >
 
    <div class="mb-3">
      <label >Tên danh mục:</label>
      <input type="text" class="form-control" value="<?php echo $rows['tendanhmuc']; ?>" name="tendanhmuc">
    </div>
    <div class="mb-3">
      <label >Thứ tự:</label>
      <input type="number" class="form-control"value="<?php echo $rows['thutu']; ?>" name="thutu">
    </div>
   
    
    <button type="submit" class="btn btn-primary" name="sua">Sửa</button>

  </form>
</div>
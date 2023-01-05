<?php
include("../database/connect.php");

?>
<?php   $b=$_GET['id1']; ?>
<?php
if(isset($_POST['sua'])){
    $masp = isset($_POST['masp'])?$_POST['masp']:'';
    $tensp = isset($_POST['tensp'])?$_POST['tensp']:'';
   
    $dongia = isset($_POST['dongia'])?$_POST['dongia']:'';
    $anh =isset( $_FILES['anh']['name'])?$_FILES['anh']['name']:'';
    $anh_tmp = $_FILES['anh']['tmp_name'];
    $soluong =isset( $_POST['soluong'])?$_POST['soluong']:'';
    $mota =isset( $_POST['mota'])?$_POST['mota']:'';
    $danhmuc =isset( $_POST['danhmuc'])?$_POST['danhmuc']:'';
    $trangthai =isset( $_POST['trangthai'])?$_POST['trangthai']:'';
 

        if ($anh=='') {
          
            $sql = "UPDATE `sanpham` SET `masp`='$masp',`tensp`='$tensp',`dongia`='$dongia',`soluong`='$soluong',`mota`='$mota',`trangthai`='$trangthai',`id_danhmuc`='$danhmuc' WHERE masp=$b";
            $query=mysqli_query($conn,sql);
        
        }
        else{
          
            $select = "select * from sanpham where masp=$b";
                $query = mysqli_query($conn,$select);
                while($row = mysqli_fetch_array($query)){
                 unlink('uploads/'.$row['anh']);
                }
                move_uploaded_file($anh_tmp,"uploads/".$anh);
            $sql = "UPDATE `sanpham` SET `masp`='$masp',`tensp`='$tensp',`dongia`='$dongia',`anh`='$anh',`soluong`='$soluong',`mota`='$mota',`trangthai`='$trangthai',`id_danhmuc`='$danhmuc' WHERE masp=$b";
            $query=mysqli_query($conn,$sql);
           

        }

  header("location:sanpham.php");
}


$select="select * from sanpham where masp='$b'";
$result=mysqli_query($conn,$select);
$rows = mysqli_fetch_array($result);
?>
<div class="container mt-3">
  <h2>Sửa sản phẩm</h2> 
  <form action=""method="POST" enctype="multipart/form-data">
  <div class="mb-3 mt-3">
  <div class="mb-3">
      <label >Mã sản phẩm:</label>
      <input type="text" class="form-control" value="<?php echo $rows['masp']; ?>" name="masp">
    </div>
    </div>
    <div class="mb-3">
      <label >Tên sản phẩm:</label>
      <input type="text" class="form-control" value="<?php echo $rows['tensp']; ?>" name="tensp">
    </div>
    <div class="mb-3">
      <label >Đơn giá:</label>
      <input type="number" class="form-control"value="<?php echo $rows['dongia']; ?>" name="dongia">
    </div>
    <div class="mb-3">
      <label >Ảnh:</label>
      <input type="file" class="form-control-file border" name="anh"><img src="uploads/<?php echo $rows['anh']; ?>"width=150px height=200px>
    </div>
    <div class="mb-3">
      <label >Số lượng:</label>
      <input type="number" class="form-control"value="<?php echo $rows['soluong']; ?>" name="soluong">
    </div>
    <div class="mb-3">
      <label >Mô tả:</label>
      <textarea class="form-control" rows="5" name="mota"><?php echo $rows['mota']; ?></textarea>
    </div>
    <div class="mb-3">
      <label >Danh mục sản phẩm :</label>
      <select class="form-control" name="danhmuc">
<?php
$sl = "select * from danhmuc";
mysqli_query($conn,$select);
while ($row_danhmuc = mysqli_fetch_array($query)) {
    if ($row_danhmuc['id_danhmuc'] == $rows['id_danhmuc']) {
?>

    <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
    <?php
    } else {
    ?>
    <option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
<?php }
}
?>
</select>
    </div>
    
    <div class="mb-3">
      <label >Trạng thái:</label>
      <select class="form-control"  name="trangthai">
        <?php
        if($rows['trangthai']==1){
        ?>
    <option value="1" selected>còn hàng</option>
    <option value="0">hết hàng</option>
    <?php }
    else{
        ?>
         <option value="1">còn hàng</option>
    <option value="0"selected>hết hàng</option>
    <?php } ?>
  </select>
    </div>
    <button type="submit" class="btn btn-primary" name="sua">Sửa</button>

  </form>
</div>
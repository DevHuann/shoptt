<?php
session_start();
include("../../database/connect.php");

?>

<?php
if (isset($_POST['submit'])) {
    $taikhoan = isset($_POST['taikhoan']) ? $_POST['taikhoan'] : "";
    $matkhau_cu = isset($_POST['matkhau']) ? $_POST['matkhau'] : "";
    $matkhau_moi = isset($_POST['matkhau_moi']) ? $_POST['matkhau_moi'] : "";
    $sql = "SELECT * FROM user where taikhoan='".$taikhoan."' and matkhau='".$matkhau_cu."'";
    $query=mysqli_query($conn,$sql);
    $count = mysqli_num_rows($query);
   // echo $count;
   if($count >0){
        $sql_update = "UPDATE user set matkhau='" . $matkhau_moi . "' where  taikhoan='" . $taikhoan . "' and matkhau='" . $matkhau_cu . "'";
        $query_update = mysqli_query($conn,$sql_update);
        if($query_update){
            echo '<p style="text-align:center;color:red"> thay đổi thành công </p>';
        }
       header("location:../index.php");

   }

}
?>
<div class="container mt-3">
  <h2>Đổi mật khẩu</h2>
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Tài khoản:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="taikhoan">
    </div>
    <div class="mb-3">
      <label for="pwd">Mật khẩu cũ:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password cũ" name="matkhau">
    </div>
    <div class="mb-3">
      <label for="pwd">Mật khẩu mới:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password mới" name="matkhau_moi">
    </div>
   
    <button type="submit"name ="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
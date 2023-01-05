<?php
$sql_danhmuc="SELECT * FROM danhmuc";
$query_danhmuc=mysqli_query($conn,$sql_danhmuc);
?>
<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <?php
                        while ($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                            ?>
                            <a href="?quanly=quanlydanhmuc&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><button style="width: 200px;height: 200px;"><p style="color: #66afe9;"><?php echo $row_danhmuc['tendanhmuc']?></p></button></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->
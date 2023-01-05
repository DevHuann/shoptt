<?php
$sql_sanpham="SELECT * FROM sanpham";
$query_sanpham=mysqli_query($conn,$sql_sanpham);
?>

<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container text-center">
        <div class="row row-cols-3">
            <?php
            while ($row_sanpham=mysqli_fetch_array($query_sanpham)){
                ?>
                <div class="col">
                    <div class="single-product col">
                        <div class="product-f-image">
                            <img style="width: 195px;height: 243px;" src="../admin/uploads/<?php echo $row_sanpham['anh']?>" alt="">
                            <div class="product-hover">
                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                <a href="?quanly=quanlysanpham&masp=<?php echo $row_sanpham['masp'] ?>" class="view-details-link"><i class="fa fa-link"></i> See
                                    details</a>
                            </div>
                        </div>

                        <h2><?php echo $row_sanpham['tensp']?></h2>
                        <div class="product-carousel-price">
                            <ins><?php echo number_format($row_sanpham['dongia']) ?></ins>
                            <del>$999.00</del>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

</div> <!-- End product widget area -->

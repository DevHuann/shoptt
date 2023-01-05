<div class="product-details">
    <form method="POST" action="?quanly=quanlygiohang&masp=<?php echo $_GET['masp']; ?>">
        <div class="grid images_3_of_2">
            <div id="container">
                <div id="products_example">
                    <div id="products">
                        <div class="slides_container">
                            <?php
                            $masanpham = $_GET['masp'];
                            $select = "select * from sanpham where masp=$masanpham limit 1";
                            $query = mysqli_query($conn, $select);
                            $row = mysqli_fetch_array($query);
                            ?>
                            <img src="../admin/uploads/<?php echo $row['anh'] ?>" alt=""/>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="desc span_3_of_2">
            <h2>Tên sản phẩm: <?php echo $row['tensp'] ?> </h2>
            <h2>Mã sản phẩm: <?php echo $row['masp'] ?> </h2>
            <h2>Giá: <?php echo number_format($row['dongia']) ?>VNĐ</h2>
            <h2>Số lượng: <?php echo $row['soluong'] ?> </h2>
            <div class="available">

            </div>
            <div class="share-desc">

                <button type="submit" style="background-color:blue;font-size:30px"
                        name="themgiohang"><span>Add to Cart</span></button>
                <div class="clear"></div>
            </div>

        </div>
        <div class="clear"></div>
    </form>
</div>
<div class="product_desc">
    <div id="horizontalTab">
        <ul class="resp-tabs-list">
            <li>Product Details</li>

            <div class="clear"></div>
        </ul>
        <div class="resp-tabs-container">
            <div class="product-desc">
                <p><?php echo $row['mota']?></p>
            </div>


        </div>
    </div>
</div>
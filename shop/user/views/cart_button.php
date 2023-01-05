
<?php
$tongtien = 0;
$tongsanpham = 0;
if (isset($_SESSION['cart'])) {

    foreach ($_SESSION['cart'] as $cart_item) {
        $thanhtien = $cart_item['soluong'] * $cart_item['dongia'];
        $tongtien += $thanhtien;
        $tongsanpham += $cart_item['soluong'];
    }
}
?>

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href=""><img src="../public/img/logo.png"></a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="?quanly=quanlygiohang">Cart - <span class="cart-amunt"></span><?php echo number_format($tongtien) ?>VNĐ</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $tongsanpham?></span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->
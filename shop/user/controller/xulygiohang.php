
<?php
session_start();
//session_destroy();
if(isset($_GET['xoatoanbo']) && $_GET['xoatoanbo']==1){
    unset($_SESSION['cart']);
    header("Location:../index.php?quanly=quanlygiohang");
}
else if(isset($_SESSION['cart'])&& isset($_GET['xoasanpham'])){
    $masp = $_GET['xoasanpham'];
    // $product[] = array();
    if (count($_SESSION['cart']) >= 2) {
        foreach ($_SESSION['cart'] as $cart_item) {
            if ($cart_item['masp'] != $masp) {
                $product[] = array("masp" => $cart_item['masp'], "tensp" => $cart_item['tensp'], "soluong" => $cart_item['soluong'], "dongia" => $cart_item['dongia'], "anh" => $cart_item['anh']);

                $_SESSION['cart'] = $product;

            }
            // echo count($_SESSION['cart']);

        }
    }
    else{

        unset($_SESSION['cart']);
    }
    // echo '<pre>';
    // var_dump($_SESSION['cart']);
    // echo '</pre>';
    header("Location:../index.php?quanly=quanlygiohang");
}
else if(isset($_GET['cong'])){
    $masp = $_GET['cong'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['masp'] != $masp) {
            $product[] = array("masp" => $cart_item['masp'], "tensp" => $cart_item['tensp'], "soluong" => $cart_item['soluong'], "dongia" => $cart_item['dongia'], "anh" => $cart_item['anh']);

            $_SESSION['cart'] = $product;

        }
        else{
            $tangsoluong =  $cart_item['soluong']+1;
            if( $cart_item['soluong']<=9){
                $product[] = array("masp" => $cart_item['masp'], "tensp" => $cart_item['tensp'], "soluong" => $tangsoluong, "dongia" => $cart_item['dongia'], "anh" => $cart_item['anh']);
            }else{
                $product[] = array("masp" => $cart_item['masp'], "tensp" => $cart_item['tensp'], "soluong" => $cart_item['soluong'], "dongia" => $cart_item['dongia'], "anh" => $cart_item['anh']);
            }
        }
        $_SESSION['cart'] = $product;
    }
    header("Location:../index.php?quanly=quanlygiohang");
}
else if(isset($_GET['tru'])){
    $masp = $_GET['tru'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['masp'] != $masp) {
            $product[] = array("masp" => $cart_item['masp'], "tensp" => $cart_item['tensp'], "soluong" => $cart_item['soluong'], "dongia" => $cart_item['dongia'], "anh" => $cart_item['anh']);

            $_SESSION['cart'] = $product;

        }
        else{
            $tangsoluong =  $cart_item['soluong']-1;
            if( $cart_item['soluong']>1){
                $product[] = array("masp" => $cart_item['masp'], "tensp" => $cart_item['tensp'], "soluong" => $tangsoluong, "dongia" => $cart_item['dongia'], "anh" => $cart_item['anh']);
            }else{
                $product[] = array("masp" => $cart_item['masp'], "tensp" => $cart_item['tensp'], "soluong" => $cart_item['soluong'], "dongia" => $cart_item['dongia'], "anh" => $cart_item['anh']);
            }
        }
        $_SESSION['cart'] = $product;
    }
    header("Location:../index.php?quanly=quanlygiohang");
}

?>

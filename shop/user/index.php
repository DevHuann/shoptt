<?php
session_start();
include("../database/connect.php");


?>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);

}
?>
<!DOCTYPE HTML>
<head>
    <title>Free Home Shoppe Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/owl.carousel.css">
    <link rel="stylesheet" href="../public/style.css">
    <link rel="stylesheet" href="../public/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!--<ul>-->
<!--    --><?php //if (!isset($_SESSION['dangky'])) { ?>
<!--        <li><a href="register.php">Register</a></li>-->
<!--        <li><a href="login.php">Login</a></li>-->
<!--    --><?php //} else { ?>
<!--        <li><a href="index.php?dangxuat=1">Đăng xuất:--><?php //echo $_SESSION['dangky']; ?><!--</a></li>-->
<!--        <li><a href="doimatkhau.php?doimatkhau=1">Đổi mật khẩu: </a></li>-->
<!--    --><?php //} ?>
<!---->
<!--    <li><a href="#">Delivery</a></li>-->
<!--    <li><a href="#">Checkout</a></li>-->
<!--    <li><a href="#">My Account</a></li>-->
<!--</ul>-->

<!--<ul>-->
<!--    <h3>Categories</h3>-->
<!--    --><?php //$select = "select * from danhmuc";
//    //                    $sql = $db->thucthi($select);
//    $sql = mysqli_query($conn, $select);
//    while ($row = mysqli_fetch_array($sql)) {
//        ?>
<!--        <li>-->
<!--            <a href="index.php?id=--><?php //echo $row['id_danhmuc'] ?><!--">--><?php //echo $row['tendanhmuc'] ?><!--</a>-->
<!--        </li>-->
<!---->
<!--        --><?php
//    }
//    ?>
<!--</ul>-->

    <?php include ("views/header.php")?>
    <?php include ("views/menu.php")?>
    <?php include ("views/cart_button.php")?>
    <?php include("modules/main.php") ?>

<!--    <div class="main">-->
<!--        <div class="content">-->
<!--            --><?php
//            if (isset($_GET['timkiem'])){
//                include("timkiem.php");
//            }
//
//
//            else if (isset($_GET['id'])){
//                include("main_sp/display_sp.php");
//            } else {
//            ?>
<!--            <div class="section group">-->
<!--                --><?php
//                $sql_sanpham = "select * from sanpham  order by sanpham.masp desc";
//                $query_sanpham = mysqli_query($conn, $sql_sanpham);
//                while ($row_sp = mysqli_fetch_array($query_sanpham)) {
//                    ?>
<!--                    <div class="grid_1_of_4 images_1_of_4">-->
<!--                        <a href="preview.php?masp=--><?php //echo $row_sp['masp'] ?><!--"><img-->
<!--                                    src="../admin/uploads/--><?php //echo $row_sp['anh'] ?><!--" alt=""></a>-->
<!--                        <h2>--><?php //echo $row_sp['tensp'] ?><!-- </h2>-->
<!--                        <div class="price-details">-->
<!--                            <div class="price-number">-->
<!--                                <p><span class="rupees">--><?php //echo number_format($row_sp['dongia']) ?><!--VNĐ</span></p>-->
<!--                            </div>-->
<!--                            <div class="add-cart">-->
<!--                                <h4><a href="preview.php?masp=--><?php //echo $row_sp['masp'] ?><!--">Add to Cart</a></h4>-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                --><?php //}
//                }
//                ?>
<!--            </div>-->
<!---->
<!---->
<!--        </div>-->
<!--    </div>-->

<?php include ("views/footer.php")?>
<script type="text/javascript">
    $(document).ready(function () {
        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="../public/js/owl.carousel.min.js"></script>
<script src="../public/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="../public/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="../public/js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="../public/js/bxslider.min.js"></script>
<script type="text/javascript" src="../public/js/script.slider.js"></script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>


<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Giỏ hàng: <?php
                    if(isset($_SESSION['dangky'])){

                        echo $_SESSION['dangky'];
                    } else {
                        echo ""; }?>


                </h3>
            </div>
            <div class="see">
                <p><a href="#">See all Products</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <?php

        if(isset($_POST['themgiohang'])){
            $id = $_GET['masp'];
            //echo $id;
            $soluong = 1;
            $sql = "select * from sanpham where masp='$id'";
            $query=mysqli_query($conn,$sql);
            $row_data = mysqli_fetch_array($query);
            //echo $row_data['masp'];
            if($row_data){
                $new_product = array(array("masp" =>$row_data['masp'] , "tensp" => $row_data['tensp'], "soluong" => $soluong, "dongia" => $row_data['dongia'], "anh" => $row_data['anh']));

                if(isset($_SESSION['cart']))
                {
                    $found = false;
                    foreach($_SESSION['cart'] as $cart_item){
                        if($cart_item['masp']==$id){

                            $product[] = array("masp" => $cart_item['masp'], "tensp" => $cart_item['tensp'], "soluong" =>$soluong+1, "dongia" => $cart_item['dongia'], "anh" => $cart_item['anh']);
                            $found=true;


                        }
                        else{
                            $product[] = array("masp" => $cart_item['masp'], "tensp" => $cart_item['tensp'], "soluong" => $cart_item['soluong'], "dongia" => $cart_item['dongia'], "anh" => $cart_item['anh']);


                        }

                    }
                    if($found==true){
                        $_SESSION['cart'] = $product;

                    }
                    else{

                        $_SESSION['cart'] = array_merge($product, $new_product);

                    }

                }
                else{
                    $_SESSION['cart'] = $new_product;
                }
            }

        }

        ?>
        <div class="container mt-3" style="text-align:center">

            <table class="table table-bordered" style="border:1px solid black ; ">
                <thead  style="border:1px solid black ;">

                <tr >
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh </th>
                    <th>Số lượng </th>
                    <th>Giá sản phẩm </th>
                    <th>Thành tiền </th>
                    <th>Quản lý </th>
                </tr>
                </thead>
                <tbody >
                <?php
                if (isset($_SESSION['cart'])) {
                    $tongtien = 0;
                    foreach ($_SESSION['cart'] as $cart_item) {
                        $thanhtien =  $cart_item['soluong'] *  $cart_item['dongia'] ;
                        $tongtien += $thanhtien;
                        ?>
                        <tr>
                            <td><?php echo $cart_item['masp']  ?></td>
                            <td><?php echo $cart_item['tensp']  ?></td>
                            <td><img src="../admin/uploads/<?php echo $cart_item['anh']  ?>"width=150px></td>
                            <td><a href="controller/xulygiohang.php?cong=<?php echo $cart_item['masp'] ?>">Cộng</a>
                                <?php echo $cart_item['soluong']  ?>
                                <a href="controller/xulygiohang.php?tru=<?php echo $cart_item['masp'] ?>">Trừ</a>
                            </td>
                            <td><?php echo number_format($cart_item['dongia'] ) ?>VNĐ</td>
                            <td><?php echo number_format($thanhtien) ?>VNĐ</td>
                            <td><a href="controller/xulygiohang.php?xoasanpham=<?php echo $cart_item['masp']  ?>">Xóa</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr  colspan="7"  style="border:1px solid black"><td><span style="color:red;">Tổng tiền: <?php echo number_format($tongtien) ?>VNĐ</span></td>
                        <td></td>
                        <td></td>
                        <td>
                            <?php if(isset($_SESSION['dangky'])){ ?>

                                <a href="controller/thanhtoan.php?thanhtoan">Đặt hàng</a>
                            <?php } else { ?>
                                <a href="controller/register.php">Đăng ký để đặt hàng</a>
                            <?php } ?>

                        </td>
                        <td></td>
                        <td></td>
                        <td><span ><a href="controller/xulygiohang.php?xoatoanbo=1">xóa tất cả</a></span></td>

                    </tr>

                    <?php
                } else {


                    ?>
                    <tr colspan="7">
                    <td></td>
                    <td></td>
                    <td></td>
                    <?php if (!isset($_SESSION['cart'])) { ?>
                        <td><p style="color:red;text-align:center">Hiện tại giỏ hàng trống	</p></td>
                    <?php } else {
                        ?>

                        </tr>


                        <?php
                    }

                }
                ?>

                </tbody>
            </table>
            <tr colspan="6">

            </tr>
        </div>
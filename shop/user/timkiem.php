<?php
			if(isset($_GET['timkiem'])){
				$tukhoa = $_GET['tukhoa'];			
			}
		?>
		 <div class="section group">
		  <?php
		$sql_timkiem = "select * from sanpham where tensp like '%" . $tukhoa . "%'";
		$sl_timkiem = mysqli_query($conn,$sql_timkiem);
   while ($row_sp = mysqli_fetch_array($sl_timkiem)) {
   ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.php?masp=<?php echo $row_sp['masp'] ?>"><img src="../admin/uploads/<?php echo $row_sp['anh'] ?>" alt="" /></a>
					 <h2><?php echo $row_sp['tensp'] ?> </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo number_format($row_sp['dongia']) ?>VNĐ</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.php?masp=<?php echo $row_sp['masp'] ?>">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>	
				<?php }?>
			</div>




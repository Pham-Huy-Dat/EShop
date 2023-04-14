<?php
include("include/common.php");
include "./include/header.php";

// select all product
$data = db_select("SELECT * FROM product");

check_login();
?>

<!-- BEGIN CONTAINER PRODUCT ADMIN -->
<div class="container">
	<div class="add-product margin-bottom-25">
		<button type="submit" class="btn btn-primary">
			<a href="admin/create.php" style="color: white; text-decoration: none;">ADD PRODUCT</a>
		</button>
	</div>
	<!-- SIDEBAR -->
	<div class="row margin-bottom-40">
		<!-- BEGIN SIDEBAR -->
		<?php
		include "include/saibar.php"
		?>
		<!-- END SIDEBAR -->

		<!-- BEGIN CONTENT -->
		<div class="col-md-9 col-sm-7">
			<!-- BEGIN PRODUCT ELECTRONIC -->
			<div>
				<h3>Electronic</h3>
				<!-- BEGIN PRODUCT LIST -->
				<div class="row product-list">

					<?php
					foreach ($data as $item) {
						$id = $item["id"];
						$name = $item["name"];
						$price = $item["price"];

						$src_img= upload($item["image"] ?? "", true);
						
						echo <<<ELO
						<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="$src_img" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="$src_img" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="">$name</a></h3>
							<div class="pi-price">$$price</div>
							<a href="admin/delete.php?id=$id" class="btn btn-default delete2">delete</a>
							<a href="admin/edit.php?id=$id" class="btn btn-default edit2">edit</a>
						</div>
					</div>
				ELO;
					} ?>
					
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="assets/pages/img/product/electronic/arduino1.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="assets/pages/img/product/electronic/arduino1.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress Berry Lace Dress</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="admin/delete.php" class="btn btn-default delete2">delete</a>
							<a href="admin/edit.php" class="btn btn-default edit2">edit</a>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->

					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="assets/pages/img/product/electronic/arduino2.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="assets/pages/img/product/electronic/arduino2.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
							<div class="pi-price">$29.00</div>
							<a type="submit" href="admin/delete.php" class="btn btn-default delete2">delete</a>
							<a href="admin/edit.php" class="btn btn-default edit2">edit</a>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
					<!-- PRODUCT ITEM START -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="assets/pages/img/product/electronic/arduino3.jpg" class="img-responsive" alt="Berry Lace Dress">
								<div>
									<a href="assets/pages/img/product/electronic/arduino3.jpg" class="btn btn-default fancybox-button">Zoom</a>
									<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="shop-item.html">Berry Lace Dress 2</a></h3>
							<div class="pi-price">$29.00</div>
							<a href="admin/delete.php" class="btn btn-default delete2">delete</a>
							<a href="admin/edit.php" class="btn btn-default edit2">edit</a>
						</div>
					</div>
					<!-- PRODUCT ITEM END -->
				</div>
			</div>
			<!-- END PRODUCT ELECTRONIC -->
		</div>
	</div>
</div>
<!-- END CONTAINER -->

<!-- FOOTER -->
<?php
include "./include/footer.php"
?>
<!-- END FOOTER -->
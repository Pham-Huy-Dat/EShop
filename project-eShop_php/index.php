<?php
	include("include/common.php");
	$data = db_select("SELECT * FROM product");
	
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head BEGIN -->

<head>
	<meta charset="utf-8">
	<title>shop</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- Global styles START -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
	<!-- Global styles END -->

	<!-- Page level plugin styles START -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.3/jquery.fancybox.min.css"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.css" rel="stylesheet">
	<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin styles END -->

	<!-- Theme styles START -->
	<link rel="stylesheet" href="<?php asset("corporate/css/style.css"); ?>" />
	<link rel="stylesheet" href="<?php asset("pages/css/style-shop.css"); ?>" />
	<link rel="stylesheet" href="<?php asset("corporate/css/style-responsive.css"); ?>" />
	<link rel="stylesheet" href="<?php asset("corporate/css/style-custom.css"); ?>" />
	<!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="ecommerce">
	<!-- BEGIN TOP BAR -->
	<div class="pre-header">
		<div class="container">
			<div class="row">
				<!-- BEGIN TOP BAR LEFT PART -->
				<div class="col-md-6 col-sm-6 additional-shop-info">
					<ul class="list-unstyled list-inline">
						<li><i class="fa fa-phone"></i><span>0336 553 700</span></li>
						<!-- BEGIN CURRENCIES -->
						<li class="shop-currencies">
							<a href="" class="current">đ</a>
							<a href="">$</a>
						</li>
						<!-- END CURRENCIES -->

					</ul>
				</div>
				<!-- END TOP BAR LEFT PART -->
				<!-- BEGIN TOP BAR MENU -->
				<div class="col-md-6 col-sm-6 additional-nav">
					<ul class="list-unstyled list-inline pull-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="admin.php"> Admin </a></li>
						<li><a href="#">Checkout</a></li>
						<?php if (is_logged()) { ?>
							<li >
								<a href=""><i class="fa-solid fa-user"></i></a>
							</li>
							<li><a href="logout.php">logout</a></li>
						<?php } else { ?>
							<!-- <li><a href="#login-up" class="fancybox-fast-view">Log in</a></li> -->
							<li><a href="login.php">log in</a></li>
							<li><a href="register.php">Sing up</a></li>
						<?php } ?>
					</ul>
				</div>
				<!-- END TOP BAR MENU -->
			</div>
		</div>
	</div>
	<!-- END TOP BAR -->

	<!-- BEGIN HEADER -->
	<div class="header">
		<div class="container">
			<a class="site-logo" href="shop-index.html"><img src="assets/corporate/img/logo/logo_techbot.png" alt="techbot shop" style="width:128px; height:32px"></a>

			<a href="javascript:void(0);" class="mobi-toggler"><i class="fa-regular fa-bars"></i></a>

			<!-- BEGIN CART -->
			<div class="top-cart-block">
				<div class="top-cart-info">
					<a href="" class="top-cart-info-count">0 items</a>
					<a href="" class="top-cart-info-value">$0</a>
				</div>
				<i class="fa fa-shopping-cart"></i>

				<!-- <div class="top-cart-content-wrapper">
					<div class="top-cart-content">
						<ul class="scroller" style="height: 250px;">
							<li>
								<a href="shop-item.html"><img src="assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
								<span class="cart-content-count">x 1</span>
								<strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
								<em>$1230</em>
								<a href="" class="del-goods">&nbsp;</a>
							</li>
						</ul>
						<div class="text-right">
							<a href="shop-shopping-cart.html" class="btn btn-default">View Cart</a>
							<a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
						</div>
					</div>
				</div> -->
			</div>
			<!--END CART -->

			<!-- BEGIN NAVIGATION -->
			<div class="header-navigation">
				<ul>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
							ROBOT
						</a>

						<!-- BEGIN DROPDOWN MENU -->
						<ul class="dropdown-menu">
							<li class="dropdown-submenu">
								<a href="index.php">.....<i class="fa fa-angle-right"></i></a>
								<!-- <ul class="dropdown-menu" role="menu">
									<li><a href="index.php">Second Level Link</a></li>
									<li class="dropdown-submenu">
										<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
											Second Level Link
											<i class="fa fa-angle-right"></i>
										</a>
										<ul class="dropdown-menu">
											<li><a href="index.php">Third Level Link</a></li>
											<li><a href="index.php">Third Level Link</a></li>
										</ul>
									</li>
								</ul> -->
							</li>
							<li><a href="index.php">...</a></li>
							<li><a href="index.php">...</a></li>
						</ul>
						<!-- END DROPDOWN MENU -->
					</li>
					<li class="dropdown dropdown-megamenu">
						<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
							Electronics
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="header-navigation-content">
									<div class="row">
										<div class="col-md-4 header-navigation-col">
											<h4>Arduino</h4>
											<!-- sau lm tiep -->
										</div>
										<div class="col-md-4 header-navigation-col">
											<h4>....</h4>
											<ul>
												<!-- sau lm tiep -->
											</ul>
										</div>
										<!-- lam sau -->
										<!-- <div class="col-md-4 header-navigation-col">
											<h4>...</h4>
											<ul>
												<li><a href="index.php">Belts</a></li>
												<li><a href="index.php">Caps</a></li>
											</ul>

											<h4>Clearance</h4>
											<ul>
												<li><a href="index.php">Jackets</a></li>
												<li><a href="index.php">Bottoms</a></li>
											</ul>
										</div> -->
									</div>
								</div>
							</li>
						</ul>
					</li>

					<li class="dropdown100 nav-catalogue">
						<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
							Coffee
						</a>
					</li>

					<li class="dropdown100 nav-catalogue">
						<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
							New
						</a>
					</li>

					<li class="active">
						<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
							Product
						</a>
					</li>

					<!-- BEGIN TOP SEARCH -->
					<li class="menu-search">
						<span class="sep"></span>
						<i class="fa fa-search search-btn"></i>
						<div class="search-box">
							<form action="#">
								<div class="input-group">
									<input type="text" placeholder="Search" class="form-control">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="submit">Search</button>
									</span>
								</div>
							</form>
						</div>
					</li>
					<!-- END TOP SEARCH -->
				</ul>
			</div>
			<!-- END NAVIGATION -->
		</div>
	</div>
	<!-- Header END -->

	<div class="title-wrapper">
		<div class="container">
			<!-- slider lm sau -->
		</div>
	</div>

	<div class="main">
		<div class="container">
			<!-- <ul class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li><a href="">Store</a></li>
				<li class="active">Men category</li>
			</ul> -->

			<!-- BEGIN SIDEBAR & CONTENT -->
			<div class="row margin-bottom-40">
				<!-- BEGIN SIDEBAR -->
				<div class="sidebar col-md-3 col-sm-5">
					<ul class="list-group margin-bottom-50 sidebar-menu">
						<li class="list-group-item clearfix active"><a href="index.php" class="collapsed"><i class="fa fa-angle-right"></i> All </a></li>
						<li class="list-group-item clearfix"><a href="index.php"><i class="fa fa-angle-right"></i> Robot</a></li>
						<li class="list-group-item clearfix dropdown ">
							<a href="">
								<i class="fa fa-angle-right"></i>
								Electronics
							</a>
							<!-- tu tu lam sau nang cap sau -->
							<!-- <ul class="dropdown-menu" style="display:block;">
								<li class="list-group-item dropdown clearfix">
									<a href=""><i class="fa fa-angle-right"></i> Shoes </a>
									<ul class="dropdown-menu" style="display:block;">
										<li class="list-group-item dropdown clearfix">
											<a href=""><i class="fa fa-angle-right"></i> Classic </a>
											<ul class="dropdown-menu">
												<li><a href="index.php"><i class="fa fa-angle-right"></i> Classic 1</a></li>
												<li><a href="index.php"><i class="fa fa-angle-right"></i> Classic 2</a></li>
											</ul>
										</li>
										<li class="list-group-item dropdown clearfix ">
											<a href=""><i class="fa fa-angle-right"></i> Sport </a>
											<ul class="dropdown-menu" style="display:block;">
												<li class=""><a href="index.php"><i class="fa fa-angle-right"></i> Sport 1</a></li>
												<li><a href="index.php"><i class="fa fa-angle-right"></i> Sport 2</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="index.php"><i class="fa fa-angle-right"></i> Trainers</a></li>
								<li><a href="index.php"><i class="fa fa-angle-right"></i> Jeans</a></li>
							</ul> -->
						</li>
						<li class="list-group-item clearfix"><a href="index.php"><i class="fa fa-angle-right"></i> Coffee</a></li>
					</ul>

					<div class="sidebar-filter margin-bottom-25">
						<h2>Filter</h2>
						<h3>Availability</h3>
						<div class="checkbox-list">
							<label><input type="checkbox"> Not Available (3)</label>
							<label><input type="checkbox"> In Stock (26)</label>
						</div>

						<h3>Price</h3>
						<p>
							<label for="amount">Range:</label>
							<input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
						</p>
						<div id="slider-range"></div>
					</div>

				</div>
				<!-- END SIDEBAR -->
				<!-- BEGIN CONTENT -->
				<div class="col-md-9 col-sm-7">
					<div class="row list-view-sorting clearfix">
						<div class="col-md-2 col-sm-2 list-view">
							<a href="javascript:;"><i class="fa fa-th-large"></i></a>
							<a href="javascript:;"><i class="fa fa-th-list"></i></a>
						</div>
						<div class="col-md-10 col-sm-10">
							<div class="pull-right">
								<label class="control-label">Show:</label>
								<select class="form-control input-sm">
									<option value="#?limit=24" selected="selected">24</option>
									<option value="#?limit=25">25</option>
									<option value="#?limit=50">50</option>
									<option value="#?limit=75">75</option>
									<option value="#?limit=100">100</option>
								</select>
							</div>
							<div class="pull-right">
								<label class="control-label">SortBy:</label>
								<select class="form-control input-sm">
									<option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
									<option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
									<option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
									<option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
									<option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
									<option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
									<option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
									<option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
									<option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
								</select>
							</div>
						</div>
					</div>

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
									<a href="#product-pop-up $id" class="btn btn-default fancybox-fast-view">View</a>
								</div>
							</div>
							<h3><a href="">$name</a></h3>
							<div class="pi-price">$$price</div>
							<a href="" class="btn btn-default add2cart">Add to cart</a>

						</div>
					</div>
				ELO;
					} ?>
					</div>
					<!-- END PRODUCT ELECTRONIC -->
					<div>
						<h3>ROBOT</h3>
						<div class="row product-list">
							<!-- PRODUCT ITEM START -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-item">
									<div class="pi-img-wrapper">
										<img src="assets/pages/img/products/lego1.jpg" class="img-responsive" alt="Berry Lace Dress">
										<div>
											<a href="assets/pages/img/products/lego1.jpg" class="btn btn-default fancybox-button">Zoom</a>
											<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
										</div>
									</div>
									<h3><a href="shop-item.html">Berry Lace Dress Berry Lace Dress</a></h3>
									<div class="pi-price">$29.00</div>
									<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
								</div>
							</div>
							<!-- PRODUCT ITEM END -->
							<!-- PRODUCT ITEM START -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-item">
									<div class="pi-img-wrapper">
										<img src="assets/pages/img/products/lego2.jpg" class="img-responsive" alt="Berry Lace Dress">
										<div>
											<a href="assets/pages/img/products/lego2.jpg" class="btn btn-default fancybox-button">Zoom</a>
											<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
										</div>
									</div>
									<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
									<div class="pi-price">$29.00</div>
									<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
								</div>
							</div>
							<!-- PRODUCT ITEM END -->
							<!-- PRODUCT ITEM START -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-item">
									<div class="pi-img-wrapper">
										<img src="assets/pages/img/products/lego3.jpg" class="img-responsive" alt="Berry Lace Dress">
										<div>
											<a href="assets/pages/img/products/lego3.jpg" class="btn btn-default fancybox-button">Zoom</a>
											<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
										</div>
									</div>
									<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
									<div class="pi-price">$29.00</div>
									<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
								</div>
							</div>
							<!-- PRODUCT ITEM END -->
						</div>
					</div>
					<div>
						<h3>COFFEE</h3>
						<div class="row product-list">
							<!-- PRODUCT ITEM START -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-item">
									<div class="pi-img-wrapper">
										<img src="assets/pages/img/products/cf1.jpg" class="img-responsive" alt="Berry Lace Dress">
										<div>
											<a href="assets/pages/img/products/cf1.jpg" class="btn btn-default fancybox-button">Zoom</a>
											<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
										</div>
									</div>
									<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
									<div class="pi-price">$29.00</div>
									<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
								</div>
							</div>
							<!-- PRODUCT ITEM END -->
							<!-- PRODUCT ITEM START -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-item">
									<div class="pi-img-wrapper">
										<img src="assets/pages/img/products/cf2.jpg" class="img-responsive" alt="Berry Lace Dress">
										<div>
											<a href="assets/pages/img/products/cf2.jpg" class="btn btn-default fancybox-button">Zoom</a>
											<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
										</div>
									</div>
									<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
									<div class="pi-price">$29.00</div>
									<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
								</div>
							</div>
							<!-- PRODUCT ITEM END -->
							<!-- PRODUCT ITEM START -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-item">
									<div class="pi-img-wrapper">
										<img src="assets/pages/img/products/cf3.jpg" class="img-responsive" alt="Berry Lace Dress">
										<div>
											<a href="assets/pages/img/products/cf3.jpg" class="btn btn-default fancybox-button">Zoom</a>
											<a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
										</div>
									</div>
									<h3><a href="shop-item.html">Berry Lace Dress</a></h3>
									<div class="pi-price">$29.00</div>
									<a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
	
								</div>
							</div>
							<!-- PRODUCT ITEM END -->
						</div>
					</div>
					<!-- END PRODUCT LIST -->
					<!-- BEGIN PAGINATOR -->
					<div class="row">
						<div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
						<div class="col-md-8 col-sm-8">
							<ul class="pagination pull-right">
								<li><a href="javascript:;">&laquo;</a></li>
								<li><a href="javascript:;">1</a></li>
								<li><span>2</span></li>
								<li><a href="javascript:;">3</a></li>
								<li><a href="javascript:;">4</a></li>
								<li><a href="javascript:;">5</a></li>
								<li><a href="javascript:;">&raquo;</a></li>
							</ul>
						</div>
					</div>
					<!-- END PAGINATOR -->
				</div>
				<!-- END CONTENT -->
			</div>
			<!-- END SIDEBAR & CONTENT -->
		</div>
	</div>


	<!-- BEGIN STEPS -->
	<div class="steps-block steps-block-red">
		<div class="container">
			<div class="row">
				<div class="col-md-4 steps-block-col">
					<i class="fa fa-truck"></i>
					<div>
						<h2>Free shipping</h2>
						<em>Express delivery withing 3 days</em>
					</div>
					<span>&nbsp;</span>
				</div>
				<div class="col-md-4 steps-block-col">
					<i class="fa fa-gift"></i>
					<div>
						<h2>Daily Gifts</h2>
						<em>3 Gifts daily for lucky customers</em>
					</div>
					<span>&nbsp;</span>
				</div>
				<div class="col-md-4 steps-block-col">
					<i class="fa fa-phone"></i>
					<div>
						<h2>477 505 8877</h2>
						<em>24/7 customer care available</em>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END STEPS -->


	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<!-- BEGIN COPYRIGHT -->
				<div class="col-md-4 col-sm-4 padding-top-10">
					<p class="powered">
						Copyright © 2023 <a href="">TECHBOT</a>. All rights reserved.
					</p>
				</div>
				<!-- END COPYRIGHT -->
				<!-- BEGIN PAYMENTS -->
				<div class="col-md-3 col-sm-3">
					<!-- <ul class="list-unstyled list-inline pull-right">
						<li><img src="assets/corporate/img/payments/western-union.jpg" alt="We accept Western Union" title="We accept Western Union"></li>
					
					</ul> -->
					<div class="list-unstyled list-inline">
						<img src="assets/corporate/img/logo/logo_techbot.png" alt="" style="width: 250px; height: 50px;">
					</div>
				</div>
				<!-- END PAYMENTS -->
				<!-- BEGIN POWERED -->
				<div class="col-md-4 col-sm-4 text-right">
					<p class="powered">Email: <a href="#">thienhavodich@gmail.com</a></p>
				</div>
				<!-- END POWERED -->
			</div>
		</div>
	</div>
	<!-- END FOOTER -->

	<!-- BEGIN fast view of a product -->

	<?php 
		foreach ($data as $item) {
			$id = $item["id"];
			$name = $item["name"];
			$price = $item["price"];
			$description = $item["description"];
			

			$src_img= upload($item["image"] ?? "", true);

			echo <<<KOL
			<div id="product-pop-up $id" style="display: none; width: 700px;">
			<div class="product-page product-pop-up">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-3">
						<div class="product-main-image">
							<img src="$src_img" alt="$name" class="img-responsive">
						</div>
						<div class="product-other-images">
							<a href="" class="active"><img alt="Berry Lace Dress" src="$src_img"></a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-9">
						<h1>$name</h1>
						<div class="price-availability-block clearfix">
							<div class="price">
								<strong><span>$</span>$price</strong>
							</div>
							<div class="availability">
								Availability: <strong>In Stock</strong>
							</div>
						</div>
						<div class="description">
							<p>$description.</p>
						</div>
						<div class="product-page-cart">
							<div class="product-quantity">
								<input id="product-quantity" type="number" value="1"  name="product-quantity" class="form-control input-sm">
							</div>
							<button class="btn btn-primary" type="submit">Add to cart</button>
							<a href="shop-item.html" class="btn btn-default">More details</a>
						</div>
					</div>
	
				</div>
			</div>
		</div>
	KOL;
		}
	?>
	<!-- END fast view of a product -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	
	<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.3/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.11/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
	
	<script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			Layout.init();
			Layout.initOWL();
			Layout.initTwitter();
			Layout.initImageZoom();
			Layout.initTouchspin();
			Layout.initUniform();
			Layout.initSliderRange();
		});
	</script>
	<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>
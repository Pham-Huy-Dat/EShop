
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
							<a href="javascript:void(0);" class="current">đ</a>
							<a href="javascript:void(0);">$</a>
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

			<a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

			<!-- BEGIN CART -->
			<div class="top-cart-block">
				<div class="top-cart-info">
					<a href="javascript:void(0);" class="top-cart-info-count">0 items</a>
					<a href="javascript:void(0);" class="top-cart-info-value">$0</a>
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
								<a href="javascript:void(0);" class="del-goods">&nbsp;</a>
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
</body>
</html>
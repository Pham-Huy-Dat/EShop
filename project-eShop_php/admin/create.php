<?php
include ("../include/common.php");
if (is_method_post()) {
	//upload và nhận lại filename

	$name_product = $_POST["name_product"] ?? "";
	$type_product = $_POST["TypeProduct"] ?? "";
	$price_product = $_POST["price"] ?? "";

	$img = upload_and_return_filename("img", "products/img");

	//dùng filename nhận được để lưu vào db
	$sql = "INSERT INTO product (name, type_product, price, image) VALUE (?, ?, ?, ?)";

	$params = [$name_product, $type_product, $price_product, $img];
	db_execute($sql, $params);

	js_redirect_to("admin.php"); // "/" => lấy file index.php
}

$_title = "Create a new product";
?>

<!DOCTYPE html>
<html class="supernova">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
	<meta name="HandheldFriendly" content="true" />
	<title>ADD PRODUCT</title>
	<style type="text/css">
		@media print {
			.form-section {
				display: inline !important
			}

			.form-pagebreak {
				display: none !important
			}

			.form-section-closed {
				height: auto !important
			}

			.page-section {
				position: initial !important
			}
		}
	</style>
	<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?v=3.3.41005&themeRevisionID=642aed92326239083fe53f08" />
	<style type="text/css">
		.form-label-left {
			width: 150px;
		}

		.form-line {
			padding-top: 12px;
			padding-bottom: 12px;
		}

		.form-label-right {
			width: 150px;
		}
		body,
		html {
			margin: 0;
			padding: 0;
			background: #fff;
		}

		.form-all {
			margin: 0px auto;
			padding-top: 0px;
			width: 690px;
			color: #555 !important;
			font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
			font-size: 14px;
		}
	</style>

	<style type="text/css" id="form-designer-style">
		/* Injected CSS Code */
		/*PREFERENCES STYLE*/
		.form-all {
			font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, Verdana, Tahoma, sans-serif, sans-serif;
		}

		.form-label.form-label-auto {
			display: inline-block;
			float: left;
			text-align: left;

		}

		.form-line {
			margin-top: 36p;
			margin-bottom: 36px;
			padding-top: 0;
			padding-bottom: 0;
		}

		.form-all {
			max-width: 690px;
			width: 100%;
		}

		.form-label-auto,
		.form-label-auto {
			width: 150px;
		}

		.form-all {
			font-size: 14px;
		}

		.supernova .form-all,
		.form-all {
			background-color: #fff;
		}

		.form-all {
			color: #555;
		}
		.form-header-group{
			background: transparent;
			border: none;
			border-bottom: 1px solid #e3e3e3;
		}
		
		.form-header-group .form-header {
			color: #555;
		}

		.form-header-group .form-subHeader {
			color: #555;
		}
		.supernova {
			background-color: undefined;
		}

		.supernova body {
			background: transparent;
		}

		.form-textbox,
		.form-textarea {
			background-color: undefined;
			border: 1px solid #ccc;
		}

		.supernova {
			background-image: none;
		}

		.form-all {
			background-image: none;
		}

		.form-all:before {
			content: none;
		}

		.form-all {
			margin-top: 0px;
		}
		ul li{
			list-style-type: none;
		}
		.form-submit-button{
			transform: translateX(350%);
		}
		a{
			text-decoration: none;
		}
		.navbar{
			display: flex;
		}
		.navbar li{
			margin-right: 10px;
		}
	</style>

</head>

<body>
	<form class="jotform-form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
	<div role="main" class="form-all">
		<ul class="form-section page-section">
			<li class="form-input-wide">
				<div class="form-header-group">
					<div class="header-text">
						<ul class="navbar">
							<li><a href="../index.php">Home</a></li>
							<li><a href="../admin.php">Admin</a></li>
						</ul>
						<h1 id="header_1" class="form-header">Submit a Product</h1>
					</div>
				</div>
			</li>
			<li class="form-line">
				<label class="form-label form-label-left form-label-auto" for="name_product"> Product Name </label>
				<div id="cid_4" class="form-input">
					<input type="text" id="name_product" name="name_product" class="form-textbox" />
				</div>
			</li>
			<li class="form-line">
				<label class="form-label form-label-left form-label-auto"  for="TypeProduct"> Product Category </label>
				<div class="form-input">
					<select class="form-dropdown" id="TypeProduct" name="TypeProduct" style="width:150px">
						<option value="">default</option>
						<option value="Electronic">Electronic</option>	
						<option value="Robot">Robot</option>
						<option value="Coffee">Coffee</option>

					</select>
				</div>
			</li>
			<li class="form-line">
				<label class="form-label form-label-left form-label-auto"> Image of Product </label>
				<div class="form-input">
					<input type="file" id="img" name="img" accept=".png, .jpg, .jpeg" />
				</div>
			</li>

			<li class="form-line" >
				<label class="form-label form-label-left form-label-auto" for="price"> Product Price </label>
				<div class="form-input">
					<input type="number" id="price" name="price" class="form-textbox"  style="width:60px" value="" placeholder="ex: $5">
				</div>
			</li>

			<li class="form-line" data-type="control_textarea" >
				<label class="form-label form-label-left form-label-auto"  for="input_9"> Comments </label>
				<div class="form-input">
					<textarea id="" class="form-textarea" name="" cols="40" rows="6" >
					</textarea>
				</div>
			</li>
			<li class="form-line" data-type="control_button">
				<button type="submit" class="form-submit-button">Submit</button>
			</li>
		</ul>
	</div>

	</form>
</body>

</html>
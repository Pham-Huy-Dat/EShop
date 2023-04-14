<?php
include("include/common.php");
if (is_method_post()) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cf_password = $_POST["cf-password"];
	if ($password != $cf_password) {
		js_alert("Nhập mật khẩu không khớp !!");
		js_redirect_to("register.php");
		die;
	}

	// $sql_int = "INSERT INTO member (username, password) VALUE ('$username', '$password')";
	$sql_int = "INSERT INTO member VALUE (default, ?, ?)";
	/* Cách kiểm tra 2 */
	if (isUsernameExists($username)) {
		js_alert("Tài khoản đã tồn tại!!!");
		js_redirect_to("/");
		die;
	}

	// Độ dài của hash (Độ phức tạp tg của thuật toán)
	// $options = [
	// 	"cost" => 5
	// ];

	// $password_hash = password_hash($password, PASSWORD_DEFAULT, $options);
	$params = [$username, $password];

	db_execute($sql_int, $params);
	js_alert("Tạo thành công");
	js_redirect_to("/");
}

/* kiểm tra tài khoản đã tồn tại hay chưa */
function isUsernameExists(string $username): bool
{
	$sql_sel = "SELECT * FROM `member` WHERE `username`=?";
	$data = db_select($sql_sel, [$username]);
	return !empty($data);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php asset("corporate/css/style-custom.css"); ?>" />

</head>

<body style="background: linear-gradient(135deg, #4D4E63, #333342)">
	<div class="login">
		<form action="" method="post">

			<div class="form">
				<div class="hed-logo">
					<h5 class="menu"><a href="index.php">Home</a></h5>
					<h2 class="text-center">Sing up</h2>
				</div>
				<div class="form-field">
					<label for="username"><i class="fa fa-user"></i></label>
					<input type="text" id="username" name="username" placeholder="username" required autocomplete="off">
				</div>
	
				<div class="form-field">
					<label for="password"><i class="fa fa-lock"></i></label>
					<input id="password" type="password" name="password" placeholder="Password" pattern=".{6,}" required autocomplete="off">
				</div>
	
				<div class="form-field">
					<label for="cf-password"><i class="fa fa-lock"></i></label>
					<input id="cf-password" type="password" name="cf-password" placeholder="cf-Password" pattern=".{6,}" required autocomplete="off">
				</div>
				<div>
					<input type="submit" class="button arrow-wrapper" value="SIGN UP">
				</div>
			</div>
		</form>
	</div>
</body>

</html>
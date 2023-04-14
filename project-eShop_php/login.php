<?php
include("include/common.php");

if (is_logged()) {
	js_redirect_to("/");
}

if (is_method_post()) {
	// 1.Nhận thông tin
	$username = $_POST["username"] ?? "";
	$password = $_POST["password"] ?? "";

	//2.select từ db dựa vào username
	$sql = "SELECT * FROM `member` WHERE `username` = ?";
	$user = db_select($sql, [$username]);

	//3.Nếu kết quá select là rỗng ==> Nhập sai username
	if (empty($user)) {
		js_alert("tài khoản không tồn tại");
		js_redirect_to("index.php");
		die;
	}

	$user = $user[0];

	//4.Nếu kết quả select khác rỗng thì so sánh password trong db vs password ở bước 1
	// --> sử dụng password_verify()
	// if (password_verify($password, $user["password"]) == true) {
	// 	//xác thực thông tin đăng nhập thành công
	// 	js_alert("Đăng nhập thành công!!!");
	// 	$_SESSION["username"] = $username;
	// 	$_SESSION["user_id"] = $user["id"];
	// 	js_redirect_to("/");
	// } else {
	// 	js_alert("Mật khẩu sai");
	// 	js_redirect_to("index.php");
	// }

	if ($password == $user["password"]) {
		//xác thực thông tin đăng nhập thành công
		js_alert("Đăng nhập thành công!!!");
		$_SESSION["username"] = $username;
		$_SESSION["user_id"] = $user["id"];
		js_redirect_to("/");
	} else {
		js_alert("Mật khẩu sai");
		js_redirect_to("index.php");
	}
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
					<h2 class="text-center">Login</h2>
				</div>
				<div class="form-field">
					<label for="username"><i class="fa fa-user"></i></label>
					<input type="text" id="username" name="username" placeholder="username" required>
				</div>
				<div class="form-field">
					<label for="password"><i class="fa fa-lock"></i></label>
					<input id="password" type="password" name="password" placeholder="Password" required>
				</div>
				<p style="margin-left: 30px;"><a href="register.php">Sing up</a></p>
				<div>
					<input type="submit" class="button arrow-wrapper" value="SIGN IN">
				</div>
			</div>
		</form>
	</div>
</body>

</html>
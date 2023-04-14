<?php

/*
 * Thay "hoc_php" bằng tên thư mục của bạn ở htdocs
 */

// Thư mục gốc ở htdocs (đối với XAMPP)
define('ROOT_PATH', "/project-eShop_php");

// Thư mục chứa file (css/js/img)
define('ASSET_PATH', "/project-eShop_php/assets");

// Thư mục chứa file upload bởi user
define('UPLOAD_PATH', "/project-eShop_php/upload");

// Đường dẫn đầy đủ đến thư mục hiện tại, không cần chỉnh sửa nếu dùng XAMPP
define('DOCUMENT_ROOT_PATH', $_SERVER["DOCUMENT_ROOT"]);

// Thông tin đăng nhập database
$database = [
	"host" => "localhost",
	"db" => "eshop",
	"username" => "root",
	"password" => "12345",
];


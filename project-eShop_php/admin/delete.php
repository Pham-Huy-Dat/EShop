<?php
include("../include/common.php");

$id = $_GET["id"] ?? -1;

$sql = "delete from product where id=?"; //Xóa lớp có id = _____;

if (db_execute($sql, [$id])) {

	js_alert("Xóa thành công");
} else {
	js_alert("Không có gì để xóa");
}

js_redirect_to("/"); // "/" => lấy file index.php

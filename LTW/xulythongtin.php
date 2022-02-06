<?php
	require_once("conn.php");
	$hoten = $_POST["hoten"];
	$ngaysinh = $_POST["ngaysinh"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$cmnd = $_POST["cmnd"];
	$phone = $_POST["phone"];
	

	$sql = "UPDATE users set hoten = '$hoten',ngaysinh = '$ngaysinh',password = '$password', email = '$email', cmnd = '$cmnd',phone = '$phone'";

	$result = $conn->query($sql);
	
	header("Refresh: 0; url =  /LTW/khachhang.php");
?>

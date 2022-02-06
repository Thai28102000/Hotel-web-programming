<?php
	require_once("../conn.php");
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$cmnd = $_POST["cmnd"];

	$checkaccount = "SELECT * FROM users WHERE username = '$username'";
	$result = $conn->query($checkaccount);
	if($row = $result->fetch_assoc()) {
		echo '<script language="javascript">';
		echo 'alert("Tài khoản đã tồn tại, bấm OK để về trang đăng ký...")';
		echo '</script>';
		header("Refresh: 0; url =  /LTW/taikhoan/dangky.php");
	}
	else {
		$sql = "INSERT INTO users (username, password,email,phone,cmnd)
				VALUES ('$username', '$password','$email','$phone','$cmnd')";

		$conn->query($sql);
		echo '<script language="javascript">';
		echo 'alert("Đăng ký thành công, bấm OK để về trang đăng nhập...")';
		echo '</script>';
		header("Refresh: 0; url =  /LTW/taikhoan/dangnhap.php");
	}
	?>

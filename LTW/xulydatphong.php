<?php
	require_once("conn.php");
	$sophong = $_POST["sophong"];
	$ngaydat = $_POST["ngaydat"];
	$ngaytra = $_POST["ngaytra"];
	$userid = $_POST["userid"];

	$sql = "INSERT INTO thongtinkhachhang (sophong, ngaydat, ngaytra, makhachhang)
			VALUES ('$sophong', '$ngaydat', '$ngaytra','$userid')";

	$result = $conn->query($sql);
	
	echo '<script language="javascript">';
	echo 'alert("Đặt phòng thành công, bấm OK để về trang chủ...")';
	echo '</script>';
	header("Refresh: 0; url =  /LTW/index.php");
?>

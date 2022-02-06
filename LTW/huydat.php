<?php
	require_once("conn.php");
	$mathongtin = $_POST["mathongtin"];

	$sql = "delete from thongtinkhachhang where mathongtin = '$mathongtin' ";
	
	$result = $conn->query($sql);
	
	header("Refresh: 0; url =  /LTW/phongdadat.php");
?>

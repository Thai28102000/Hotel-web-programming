<?php
	require_once("conn.php");
	$id = $_POST["id"];

	$sql = "delete from users where id = $id";

	$result = $conn->query($sql);
	
	header("Refresh: 0; url =  /LTW/admin/admin.php");
?>

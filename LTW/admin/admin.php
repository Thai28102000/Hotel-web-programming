<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Trang quản trị website</title>

  </head>
  <body>

	  <div class ="container">
		<h1 style = "text-align: center"> Trang quản trị website</h1>
		<div style = "align: center"><button type = "button" class="btn btn-primary" onclick = "filmlist(event)">Xem danh sách phòng đã đặt</button></div>
		<hr>
		<table class = "table" id = "filmlist" style = "display: none">
			<tr>
				<td>Mã thông tin</td>
				<td>Số phòng</td>
				<td>Ngày đặt phòng</td>
				<td>ngày trả phòng</td>
				<td>Mã khách hàng</td>
			</tr>
			<?php
				require_once("conn.php");
				$sql = "SELECT * FROM thongtinkhachhang ORDER BY mathongtin";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				   while ($row = $result->fetch_assoc()) {
			 ?>
			  <tr>
				  <td>
					  <?php echo $row["mathongtin"]?>
				  </td>
				  <td>
					  <?php echo $row["sophong"]?>
				  </td>
				  <td>
					  <?php echo $row["ngaydat"]?>
				  </td>
				  <td>
					  <?php echo $row["ngaytra"]?>
				  </td>
				  <td>
					  <?php echo $row["makhachhang"]?>
				  </td>				 
				  <td>
					  <form action="/LTW/admin/traphong.php" method="post">
					  	<input type="hidden" value = "<?php echo $row["mathongtin"]?>" name="mathongtin">
						<button class="btn btn-primary btn-lg btn-block" type="submit">Trả phòng</button>
					  </form>
				  </td>
				  <td>

				  </td>
			  </tr>
			  <?php
			  }
				  }
			  ?>
	  </table>
	  <div style = "align: center"><button type = "button" class="btn btn-primary" onclick = "accountlist(event)">Xem danh sách tài khoản</button></div>
		<hr>
	  <table class = "table" id = "accountlist" style = "display: none">
		  <tr>
			  <td>ID</td>
			  <td>Username</td>
			  <td>Password</td>
			  <td>Email</td>
			  <td>Phone</td>
			  <td>CMND</td>
		  </tr>
		  <?php
			  require_once("conn.php");
			  $sql1 = "SELECT * FROM users ORDER BY id";
			  $result1 = $conn->query($sql1);
			  if ($result1->num_rows > 0) {
				 while ($row1 = $result1->fetch_assoc()) {
		   ?>
			<tr>
				<td><?php echo $row1["id"]?></td>
				<td><?php echo $row1["username"]?></td>
				<td><?php echo $row1["password"]?></td>
				<td><?php echo $row1["email"]?></td>
				<td><?php echo $row1["phone"]?></td>
				<td><?php echo $row1["cmnd"]?></td>
				<td>
				<form action="/LTW/admin/deleteacount.php" method="post">
				  <input type="hidden" value = "<?php echo $row1["id"]?>" name="id">
				  <button class="btn btn-primary btn-lg btn-block" type="submit">Xóa</button>
				</form>
				</td>
			</tr>
			<?php
			}
				}
			?>
	  </table>
	  
	
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
	function filmlist(event){
		var a = document.getElementById("filmlist");
		if (a.style.display === "none"){
			a.style.display = "block";
		}
		else {
			a.style.display = "none";
		}
	}
	function accountlist(event){
		var a = document.getElementById("accountlist");
		if (a.style.display === "none"){
			a.style.display = "block";
		}
		else {
			a.style.display = "none";
		}
	}
	function commentlist(event){
		var a = document.getElementById("commentlist");
		if (a.style.display === "none"){
			a.style.display = "block";
		}
		else {
			a.style.display = "none";
		}
	}
	</script>
  </body>
</html>

<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Thông tin phòng</title>
  </head>
  <body>
	  <!-- Navigation -->
  	<?php include 'navbar.php' ?>
  	<?php include 'navbar2.php' ?>

  	<!-- Page Content -->
  	<div class="container">
  		<div class = "row">
			<div class = "col-9">
  			<?php
  				require_once("conn.php");
  				$strlink = $_SERVER['PHP_SELF'];
  				preg_match_all('!\d+!', $strlink, $filmid);
  				$fid = $filmid[0][0];
  				$sql = "SELECT * FROM danhsachphong WHERE idphong = $fid";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();

				$idfilm = $row['idphong'];
				$sql1 = "SELECT * FROM danhsachphong WHERE idphong = '$idfilm' ORDER BY tap";
				$result1 = $conn->query($sql1);

				$sql2 = "SELECT * FROM theloai WHERE idphong = '$idfilm'";
				$result2 = $conn->query($sql2);
				$row2 = $result2->fetch_assoc();
				?>
				<div class = "row">
					<div class = col-6>
						<img class = "img-fluid" style="height:460px; width: 410px" src="/LTW/uploads/<?php echo $row["preview"] ?>" alt="">
	

					</div>
					<div class = col-6>
						
						<div>
							<p>Số phòng: <?php echo $row["sophong"] ?></p>
							<p>Loại <?php foreach ($row2 as $value){ echo preg_replace('/[0-9]+/', '', $value);  echo " ";} ?></p>
							<p>Tình trạng: <?php echo $row["tangphong"] ?></p>
							<p>View: <?php echo $row["gocnhin"] ?></p>
							<p>Giá Phòng: <?php echo $row["giaphong"] ?><p>
							<p>Mô tả: <?php echo $row["mota"] ?><p>
						</div>
						<?php
						if (isset($_SESSION['userid'])) {
						?>
						<form class ="form" action="/LTW/xulydatphong.php" method="POST">
							<div class="input-group mb-3">
								<input class="form-control" type="hidden" name="sophong" value = '<?php echo $row["sophong"] ?>' required>
							</div>
							
							<div class="input-group mb-3">
								<input class="form-control" type="hidden" name="userid" value = '<?php echo $_SESSION['userid'] ?>' required>
							</div>
							<b>Chọn ngày đặt phòng</b>
							<div class="input-group mb-3">												
								<input class="form-control" type="date" name="ngaydat" placeholder="Ngày đặt" required>
							</div>
							<b>Chọn ngày trả phòng</b>
							<div class="input-group mb-3">														
								<input class="form-control" type="date" name="ngaytra" placeholder="Ngày trả" required>
							</div>
							<div class="input-groub mb-3">
								<button style = "margin:auto; width:100%" class="btn btn-outline-primary" type="submit">Đặt phòng</button>
							</div>

						</form>
						<?php } ?>
					</div>
				</div>
				
			</div>
			
  		</div>
  	</div>
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

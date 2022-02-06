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

  	<div class = "row">
				<?php
					$userid = $_SESSION['userid'];
					require_once("conn.php");
					$sql1 = "SELECT * FROM thongtinkhachhang where makhachhang = $userid";
					$result1 = $conn->query($sql1);
					if ($result1->num_rows > 0) {
						while ($row1 = $result1->fetch_assoc()) {
						$sophong = $row1['sophong'];
						$sql = "select * from danhsachphong where sophong = '$sophong'";
						$result = $conn->query($sql);
						$row = $result->fetch_assoc();
				?>
					<div class = "col-lg-2 col-md-6 mb-4">
						<div class = "card text-white bg-primary">
							<img class="card-img" style="height:240px;" src="uploads/<?php echo $row["preview"] ?>" alt="">
							<div title = '<?php echo $row["gocnhin"] ?>' class="card-img-overlay">
								<h5 class="card-title" style = "background-color: white; opacity: 0.5">
									<a style = "text-decoration: none; color: black" href="/LTW/phong.php/<?php echo $row['idphong'] ?>"><?php echo $row["sophong"] ?></a>
								</h5>
							</div>
						</div>
					</div>
					<td>
					  <form action="/LTW/huydat.php" method="post">
					  	<input type="hidden" value = "<?php echo $row1["mathongtin"]?>" name="mathongtin">
						<button class="btn btn-primary btn-lg btn-block" type="submit">Hủy đặt</button>
					  </form>
					</td>
					<?php
						}
					}
					?>
		  	</div>
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

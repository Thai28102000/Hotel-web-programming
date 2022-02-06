<!DOCTYPE html>
<html>
    <head>
        <title></title>
		<meta charset="utf-8">
    <<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="account.css">
    <title>Trang đặt phòng</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
	<img class="d-block mx-auto mb-4" src="/LTW/images/logo1.png" style = "width: 300px;" "height:50px">
		<div class = "row">
				<?php
					require_once("conn.php");
					$sql = "SELECT * FROM danhsachphong";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
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
					
					<?php
						}
					}
					?>
		  	</div>
    </body>
</html>
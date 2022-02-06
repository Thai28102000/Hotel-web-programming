<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta style = "padding: 4px; border: 1px solid #1d87da; border-radius: 10px;" tags -->
    <meta style = "padding: 4px; border: 1px solid #1d87da; border-radius: 10px;" charset="utf-8">
    <meta style = "padding: 4px; border: 1px solid #1d87da; border-radius: 10px;" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <title>Home-ORCHIDS SAIGON HOTEL</title>
	<link href=”http://yoursite.com/favicon.ico” rel=”shortcut icon” />
	<link rel="Shortcut Icon" type="image/png" href="images/icon.png"/> 
    <link rel="stylesheet" type="text/css" href="css/top.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/header.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/body.css"/>
	<script src="js/main.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="css/index.css">-->
    <title>Chọn phòng</title>
  </head>
  <body>
	  <?php
	  require 'navbar.php';
	  require 'navbar2.php';
	  ?>
	  <div class ="container">
  		<div class = "row">
	  		<div class = "col-10">
				<div>
					<br>
					<?php
						$strlink = $_SERVER['PHP_SELF'];
						$uncutstr = strstr($strlink, 'chonphong.php', FALSE);
						$cutstr = str_replace("chonphong.php/","",$uncutstr);
						require_once("conn.php");
					?>
					<?php
						if ($cutstr == "theloai"){
							?>
							<h3>Danh sách loại phòng<h3>
							<hr>
							<form>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/theloai.php/tatca" >Tất cả các phòng</a>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/theloai.php/phongvipdon" >Phòng vip giường đơn</a>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/theloai.php/phongvipdoi" >Phòng vip giường đôi</a>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/theloai.php/phongdon" >Phòng đơn</a>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/theloai.php/phongdoi" >Phòng đôi </a>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/theloai.php/khac" >Khác</a>
						</form>
								<?php
						}
						if ($cutstr == "loaidichvu"){
							?>
							<h3>Danh sách dịch vụ<h3>
							<hr>
							<form>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/nhahang.php">Nhà hàng</a>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/hoboi.php">Hồ bơi</a>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/massage.php">Massage</a>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/spa.php">Spa and fitness</a>
							<a class="btn btn-outline-primary" style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" href = "/LTW/giatui.php">Giặt ủi quần áo</a>
							</form>
								<?php
						}
						
						
					?>
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

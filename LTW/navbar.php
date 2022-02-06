<nav class="navbar navbar-expand-lg navbar-light" style = "background-color: BBBBBB">
	<div class="container">
		<a href="/LTW/index.php">
			<img class="img-fluid" width = "100" style = "border: 1px solid #1d87da; border-radius: 10px;" src = "/LTW/images/logo1.png">
		</a>
		<button class="navbar-toggler" style = "width:30%" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class = "col-2"></div>
		<div class = "col-lg-3">
		<form>
			<div class = "input-group">
				<div class="container1">	
					<input type="text" id="myInput" placeholder="Tìm Kiếm" title="Type in a name of City">							
				</div>
			</div>
		</div>

		</form>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<?php
				if (isset($_SESSION['userid'])) {
					?>
					<div class = "input-group">
					<a href="/LTW/khachhang.php" style = "text-decoration: none;padding: 10px; border: 1px solid; border-radius: 3px;" class="btn btn-outline-dark">
					  Thông tin 
					</a>
					<a href="/LTW/phongdadat.php" style = "margin-left: 10px;text-decoration: none;padding: 10px; border: 1px solid; border-radius: 3px;" class="btn btn-outline-dark">
					  Phòng đã đặt
					</a>
					<a href="/LTW/datphong.php" style = "margin-left: 10px;text-decoration: none;padding: 10px; border: 1px solid; border-radius: 3px;" class="btn btn-outline-dark">
					  Đặt phòng ngay
					</a>
					<a href="/LTW/taikhoan/dangxuat.php" style = "margin-left: 10px; text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" class="btn btn-outline-primary">
					  Đăng xuất
					</a>
				</div>
					<?php
				}
				else{
					?>
					<form action = "/LTW/taikhoan/dangnhap.php" method = "POST" >
					<div class = "input-group">
					<button style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" class="btn btn-outline-primary">
					  Đăng nhập
				  	</button>
						<input type = "hidden" name = "url" value = <?php echo $_SERVER["PHP_SELF"]; ?>>
					</form>
					<a href="/LTW/taikhoan/dangky.php" style = "margin-left: 10px; text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" class="btn btn-outline-info">
					  Đăng ký
					</a>
				</div>
					<?php
				}
			?>
			</ul>
		</div>
	</div>
</nav>

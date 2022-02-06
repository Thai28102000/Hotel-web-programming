<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="account.css">
    <title>Chỉnh sửa thông tin khách hàng</title>
  </head>
	<body>
		
		<div class = "blockcontainer">
			<h4 class = "title" style="text-align :center;color :000088" >Chỉnh sửa thông tin khách hàng</h4>
			<div class = "formcontainer">
			<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
			<form class ="form" action="xulythongtin.php" method="POST">
				<div class="input-group mb-3">
					<input class="form-control" type="text" name="hoten" placeholder="Họ và tên" >
				</div>
				<div class="input-group mb-3">
					<input class="form-control" type="text" name="ngaysinh" placeholder="Ngày sinh" >
				</div>
				<div class="input-group mb-3">
					<input class="form-control" type="password" id = "password" name="password" onkeyup='check();' placeholder="Mật khẩu">
				</div>
				<div class="input-group mb-3">
					<input class="form-control" type="password" id = "confirm_password" name="password1" onkeyup='check();' placeholder="Nhập lại mật khẩu" >
				</div>
				<div class="input-group mb-3">
					<input class="form-control" type="text" name="cmnd" placeholder="Chứng minh nhân dân" >
				</div>
				<div class="input-group mb-3">
					<input class="form-control" type="email" name="email" placeholder="Email" >
				</div>
				<div class="input-group mb-3">
					<input class="form-control" type="text" name="phone" placeholder="Số điện thoại">
				</div>
				<div id = "message"></div>
				<div class="input-groub mb-3">
					<div class = "col"></div>
					<button id = "signupbtn" style = "margin:auto; width:100%" class="btn btn-outline-primary" type="submit">Lưu thông tin</button>
				</div>
			</div>
			<div class="col-3"></div>
			</div>
			</div>
			</form>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript">
			var check = function() {
			if (document.getElementById('password').value ==
			document.getElementById('confirm_password').value) {
			document.getElementById('message').style.color = 'green';
			document.getElementById('message').innerHTML = '';
			document.getElementById('signupbtn').setAttribute("type","submit");
			document.getElementById('signupbtn').setAttribute("class","btn btn-outline-primary");
			} else {
			document.getElementById('message').style.color = 'red';
			document.getElementById('message').innerHTML = 'Mật khẩu không khớp';
			document.getElementById('signupbtn').setAttribute("type","button");
			document.getElementById('signupbtn').setAttribute("class","btn btn-danger");
			}
			}
		</script>
		</body>
</html>

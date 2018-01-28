<?php include "proses/connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login User</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/bpn.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/._animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/css/._hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/select2.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">

<!--===============================================================================================-->
</head>
<body>
	<div class="wrap-login100 position">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/bpn.png" alt="Logo BPN">
				</div>
				<form method="post" class="login100-form validate-form" action="proses/login.php">
					<span class="login100-form-title">
						Login User
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukan Username Dengan Benar">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Masukan Password Dengan Benar">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
					    <button type="submit" class="login100-form-btn" name="login">login</button>
					</div>
				</form>
			</div>
		

	
	


</body>
<!--===============================================================================================-->	
	<script src="assets/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>
</html>
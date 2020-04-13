<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="img/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utilreg.css">
	<link rel="stylesheet" type="text/css" href="css/mainreg.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="{{ route('postRegister') }}" 	class="login100-form validate-form" > 
					{{ @csrf_field() }}
					<span class="login100-form-title p-b-43">
						DAFTAR
					</span>
					@include('alert')
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid Name is required">
						<input class="input100" type="text" name="nik" value="{{ old('nik') }}">
						<span class="focus-input100"></span>
						<span class="label-input100">NIK</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Nama is required">
						<input class="input100" name="nama"  value="{{ old('nama') }}">
						<span class="focus-input100"></span>
						<span class="label-input100">Nama</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="username" name="username"  value="{{ old('username') }}">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="No Telp is required">
						<input class="input100" type="telphone" name="tlp"  value="{{ old('tlp') }}">
						<span class="focus-input100"></span>
						<span class="label-input100">No Telp</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password_confirmation">
						<span class="focus-input100"></span>
						<span class="label-input100">Konfirmasi Password</span>
					</div>

					 <label>Sudah Punya Akun? <a href="{{ route('getLogin') }}">Login</a></label>

					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							DAFTAR
						</button>
					</div>
					
					
					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('../img/position-of-figures-3678799.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="js/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
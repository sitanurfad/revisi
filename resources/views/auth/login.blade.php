
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width-device-width, initial-scale=1" name="viewport">
	<link rel="stylesheet"  href="css/app.css">
	<link rel="stylesheet"  href="css/themify-icons.css">
	<link rel="stylesheet"  href="css/style.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">


	<title></title>
</head>
<body>



<div class="container" style="background: grey; width: 85%; height: 150%;">
	<div class="row justify-content-md-center mt-12">
		<div class="col-sm-8">
			<div class="row border-box">
				<div class="col-sm-6 p-0">
					<img src="img/cover.jpg" class="img-fluid">

				</div>

				
				<div class="col-sm-6 p-0">
					
						<div class="card" style="height: 100%">

							<div class="card-header">
								<!-- <img src="img/logologin.png"> -->
								<div class="sub-title">
									LOGIN
								</div>

							</div>
							@include('alert')
							<div class="icon-user"><!-- 
								<h4 class="ti-user"></h4> -->
							</div>
							<div class="card-body">

								<form method="POST"	action="{{route('postLogin')}}"
								class="form-signin">
								@csrf
								

						 <div class="input-group mb-3">
						 <div class="input-group-prepend">
						 	<span class="input-group-text"><i class="ti-email"></i></span>

						 </div>
						 <input type="text" class="form-control input-login" placeholder="Username" name="username">
						 						  </div>
 
						  <div class="input-group mb-3">
						 <div class="input-group-prepend">
						 	<span class="input-group-text"><i class="ti-lock"></i></span>

						 </div>
						 <input type="password" class="form-control input-login" placeholder="Password" name="password">
						 						  </div>

						 <label>Belum Punya Akun? <a href="{{ url('/register') }}">Register</a></label>
						  
						 
						 <!--  <div class="form-group">
						  	<label class="mz-check">
						    <input type="checkbox">
						   <i class="mz-blue"></i>
						    Remember Me</label>

						    <label class="float-right"><a href="">Lupa Sandi?</a></label>
						  </div> -->
						  <div>
						  <button type="submit" class="btn btn-primary float-right">Masuk <i class="ti-angle-double-right" style="font-size: 12px"></i> </button></div>

						   
						</form>
						</form>
							</div>
							
						</div>



				</div>
			</div>
			
		</div>
	</div>
</div>

</body>
</html>
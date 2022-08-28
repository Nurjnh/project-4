<!doctype html>
<html lang="en">
  <head>
  	<title>Login NJshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ url('public') }}/assets-login/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(public/assets-login/images/bg.jpg);"></div>
		      	<h3 class="text-center mb-0">Selamat Datang</h3>
		      	<p class="text-center"></p>
						<form action="{{url('beranda')}}" class="login-form">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control" placeholder="Password" required>
	            </div>
	            <div class="form-group d-md-flex">
								<div class="w-100 text-md-right">
									<a href="#">Lupa Password</a>
								</div>
	            </div>
	            <div class="form-group">
	            <button type="submit" class="btn form-control btn-primary rounded submit px-3">Masuk</button>
	            </div>
	          </form>
	          <div class="w-100 text-center mt-4 text">
	          	<p class="mb-0">Belum Memiliki Akun?</p>
		          <a href="#">Sign Up</a>
	          </div>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ url('public') }}/assets-login/js/jquery.min.js"></script>
  <script src="{{ url('public') }}/assets-login/js/popper.js"></script>
  <script src="{{ url('public') }}/assets-login/js/bootstrap.min.js"></script>
  <script src="{{ url('public') }}/assets-login/js/main.js"></script>

	</body>
</html>


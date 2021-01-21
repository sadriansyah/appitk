<!DOCTYPE html>
<html>
<head>
	<title>Login - Super Admin</title>
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{asset('login/img/wave.png')}}">
	<div class="container">
		<div class="img">
			<img src="{{asset('login/img/bg.svg')}}">
		</div>
		<div class="login-content">


			<form action="{{url('/postlogin')}}" method="post">
				@csrf
				<img src="{{asset('login/img/avatar.svg')}}">
				@if ($errors->any())
						<div class="alert alert-danger">
								<ul>
										@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
										@endforeach
								</ul>
						</div>
				@endif
				<div class="card-body">
					@if(session('gagal'))
					<div class="alert alert-danger" role="alert">
								{{session('gagal')}}
					</div>
					@endif
				</div>
				<h2 class="title">Welcome Super Admin</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
							<button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('login/js/main.js')}}"></script>
</body>
</html>

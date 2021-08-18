<!doctype html>
<html lang="en">
    <!-- Mirrored from bootstrap.gallery/unify-dashboards/design-1/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Aug 2021 19:55:56 GMT -->
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Unify Admin Panel" />
		<meta name="keywords" content="Signup, Login, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="/img/favicon.ico" />
		<title>Signup</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		<!-- Common CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/fonts/icomoon/icomoon.css" />
		<!-- Mian and Login css -->
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="login-bg">
		<div class="container">
			<div class="login-screen row align-items-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<form action="/register" method="POST">
                        @csrf
						<div class="login-container">
							<div class="row no-gutters">
								<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
									<div class="login-box">
										<a href="#" class="login-logo">
											<img src="/img/unify.png" alt="Unify Admin Dashboard" />
										</a>
										<div class="input-group">
											<span class="input-group-addon" id="name"><i class="icon-account_circle"></i></span>
											<input type="text" class="form-control" placeholder="Name" name="name">
										</div>
										<br>
										<div class="input-group">
											<span class="input-group-addon" id="email"><i class="icon-mail_outline"></i></span>
											<input type="email" class="form-control" placeholder="Email" name="email">
										</div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="age"><i class="icon-today"></i></span>
                                            <input type="number" class="form-control" name="age">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="gender"><i class="icon-accessibility2"></i></span>
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
										<br>
										<div class="input-group">
											<span class="input-group-addon" id="password"><i class="icon-verified_user"></i></span>
											<input type="password" class="form-control" placeholder="Password" name="password">
										</div>
										<div class="actions clearfix">
											<button type="submit" class="btn btn-primary">Signup</button>
										</div>
										<div class="or"></div>
										<div class="mt-4">
											<a href="/login" class="additional-link">Already have an Account? <span>Login Now</span></a>
										</div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
									<div class="signup-slider"></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
    <!-- Mirrored from bootstrap.gallery/unify-dashboards/design-1/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Aug 2021 19:55:56 GMT -->
</html>

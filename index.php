<?php
require_once 'server.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
	<!-- Icon Font -->
	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.css">
	<!-- Text Font -->
	<link rel="stylesheet" href="fonts/font.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Normal style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="mystyle.css">
	<!-- Normal media CSS -->
	<link rel="stylesheet" href="css/media.css">
</head>
<body>
	<main class="cd-main">
		<section class="cd-section index visible ">
			<div class="cd-content style1">
				<div class="login-box d-md-flex align-items-center">
					<img src="images/logo.png" alt="">
					<div class="login-form-box">
						<div class="login-form-slider">
							<!-- login slide start -->
							<div class="login-slide slide login-style1">
              					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
									<div class="form-group">
										<label id="username" class="label">Email</label>
										<input type="text" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label class="label">Password</label>
										<input id="password" type="password" class="form-control" name="password">
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">Remember me</label>
										</div>
									</div>
									<div class="form-group">
										<input id="button" type="submit" class="submit" value="Login">
                    					<?php select_data(); ?>
									</div>
								</form>
								<div class="sign-up-txt">
									Don't have an account? <a href="register.php" class="sign-up-click">Sign Up</a>
								</div>
								<!-- <div class="login-with">
									<h3>Login with social</h3>
									<ul class="social-login-btn">
										<li class="facebook-btn"><a href="#"><i class="ion-social-facebook"></i></a></li>
										<li class="twitter-btn"><a href="#"><i class="ion-social-twitter"></i></a></li>
										<li class="google-btn"><a href="#"><img src="images/google.svg"></a></li>
									</ul>
								</div> -->
							</div>
							<!-- login slide end -->
						
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<div id="cd-loading-bar" data-scale="1"></div>

</body>
</html>
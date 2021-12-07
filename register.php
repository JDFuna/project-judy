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
						
							<!-- signup slide start -->
							<div class="signup-slide slide login-style1">
								<div class="d-flex height-100-percentage">
									<div class="align-self-center width-100-percentage">
                    					<form action="" method="post">
											<div class="form-group">
												<label class="label">Name</label>
												<input id="name" type="text" class="form-control" name="name" id="name">
											</div>
                      							<div class="form-group">
												<label class="label">Email</label>
												<input id="email" type="email" class="form-control" name="email" id="email">
											</div>
											<div class="form-group">
												<label class="label">Password</label>
												<input id="password" type="password" class="form-control" name="password" id="password">
											</div>
											<div class="form-group padding-top-15px">
												<input id="button" type="submit" class="submit" value="Sign Up">
                        						<?php insert_data(); ?>
											</div>
										</form>
										<div class="sign-up-txt">
											if you have an account? <a href="index.php" class="login-click">Login</a>
										</div>
									</div>
								</div>
							</div>
							<!-- signup slide end -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	
</body>
</html>
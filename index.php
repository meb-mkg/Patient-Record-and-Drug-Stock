<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/font-awesome/css/all.css">
	<link rel="shortcut icon" href="assets/ico/mit.jpg">

	<script src="jquery/jquery.js"></script>
	<script src="jquery/jquery.min.js"></script>

</head>
<body>
	<div class="container" style="margin-top: 100px;margin-left: 300px;">
		<h1>MIT Patient Record and Drug Stock</h1>
		<div class="row">
			<div class="col-md-1" style="margin-top: 50px;font-size: 100px">
				<i class='fa fa-user-lock' style="margin-left: -50px;"></i>
			</div>
			<div class="col-6">
				<div class="card card-login mx-auto text-center bg-light">
					<div class="card-body">
						<h3>Login</h3>

						<form action="login.php" method="post">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-user"></i></span>
								</div>
								<input type="text" name="username" class="form-control" placeholder="Username" value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username']; }?>">
							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-key"></i></span>
								</div>
								<input type="password" name="password" class="form-control" placeholder="Password"value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; }?>">
							</div>
							<div class="row">
								<div class="col-md-6">
									<input type="checkbox" value="1" name="remember_me" id="user_remember_me" <?php if(isset($_COOKIE['username'])) { ?> checked <?php } ?>/> Remember Me
								</div>
								<div class="col-md-6 text-center">
									<div class="form-group">
										<input type="submit" name="login" value="Login" class="btn btn-primary">
									</div>
								</div>
							</div>	
						</form>
						<div class="row">
							<div class="col-md-8 col-md-offset-4">
								<a href="/auth/password/new">Forgot your password?</a><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
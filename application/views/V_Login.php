<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sipetan | Login</title>
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<style type="text/css">
		body{
			font-family: "lato";
		}

		.login-main-text{
			margin: 227px 60px 227px;
			color: #fff;
		}

		.login-main{
			margin: 221px 0px 221px;
			padding-left: 30px;
			color: #fff;
		}
	</style>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-5 col-md-5" style="background-color: #282726;">
				<div class="login-main-text">
					<h2>Sipetan | Login Page</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Login or register from here to access.</p>
				</div>
			</div>
			<div class="col-sm-7 col-md-7" style="background-color: #f05837;">
				<div class="login-main">
					<form class="form-horizontal" action="<?php echo base_url() ?>account/auth" method="post" accept-charset="utf-8">
						<?php echo $this->session->flashdata('msg'); ?>
						<div class="form-group">
							<div class="col-sm-4 col-md-4">
								<label for="username">Username</label>
								<input class="form-control" type="text" name="username" value="" placeholder="Username" required autofocus>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4 col-md-4">
								<label for="password">Password</label>
								<input class="form-control" type="password" name="password" value="" placeholder="Password" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4 col-md-4">
								<label><input type="checkbox"> Remember me</label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4 col-md-4">
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery 3 -->
	<script src="<?php echo base_url() ?>_assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url() ?>_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
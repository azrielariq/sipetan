<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sipetan | Login</title>
	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-color: #d2d6de;
		}

		.row-margin{
			margin: 150px 0;
		}

		.login-card{
			padding: 40px;
			border-radius: 10px;
			background-color: #ffffff;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		.title{
			text-align: center;
			margin-bottom: 25px;
		}	
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row row-margin">
			<div class="col-sm-4"></div>
			<div class="col-sm-4 login-card">
				<div class="col-sm-12 title">
					<h2>Login - Sipetan</h2>
				</div>
				<form class="form-horizontal form-margin" action="<?php echo base_url(); ?>Login/auth" method="post">
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
					</div>
					<div class="form-group">        
						<label><input type="checkbox" name="remember"> Remember me</label>
					</div>
					<div class="form-group">        
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

	<!-- jQuery 3 -->
	<script src="<?php echo base_url() ?>_assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url() ?>_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
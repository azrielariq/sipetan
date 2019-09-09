<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Desa | Login</title>
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="col-lg-4 col-lg-offset-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
			<h2 class="text-center">Login</h2><br>
			<form class="form-horizontal" role="form" action="<?php echo base_url() ?>account/auth" method="post">
				<?php echo $this->session->flashdata('msg'); ?>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" name="username" class="form-control" id="username" placeholder="Username" required autofocus>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">          
						<input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
					</div>
				</div>
				<div class="form-group">        
					<div class="col-sm-12">
						<div class="checkbox">
							<label><input type="checkbox"> Remember me</label>
						</div>
					</div>
				</div>
				<div class="form-group">        
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary btn-block">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- jQuery 3 -->
	<script src="<?php echo base_url() ?>_assets/bower_components/jquery/dist/jquery.min.js"></script>
</body>
</html>
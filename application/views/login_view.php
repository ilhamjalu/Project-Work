<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
		<link href="<?php echo base_url();?>assets/css/lightbox.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!--animation-->
		<link href="<?php echo base_url();?>assets/css/aos.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- font-->
		<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
</head>
<body>
<div id="login">
	<div class="container">
		<div class="row" id="pwd-container">
		<div class="col-md-4"></div>

		<div class="col-md-4">
			<section class="login-form">
				<form method="post" action="<?php echo base_url();?>index.php/awal/do_login" role="login">
					<input type="email" name="email" placeholder="example@gmail.com" required class="form-control input-lg"/>
					<input type="password" class="form-control input-lg" id="password" placeholder="Password" required="">
					<div class="pwstrength_viewport_progress"></div>
					<button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign In</button>
					<div>
						<a href="#">Create account</a> or <a href="#">reset password</a>
					</div>
				</form>
				<div class="form-links">
					<a href="#">www.website.com</a>
				</div>
			</section>
		</div>
		<div class="col-md-4"></div>
	</div>
	</div>
</div>
</body>
</html>
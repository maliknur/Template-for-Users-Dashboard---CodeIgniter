<!DOCTYPE html>
<html lang="en">
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../../assets/main.css">
	<meta charset="UTF-8">
	<meta name="author" content="Malik Nur">
	<title>Register</title>
</head>
<body>
<?php include_once('header.php'); ?>


<div class="container">

	<div class="col-lg-6">
	
		<form action="register" class="form-horizontal jumbotron">
			<div class="form-group well">
				<h3>Register</h3>
				<br>
			<div>
			<div class="form-group">
				<label for="email" class="col-lg-5 control-label">Email:</label>
			<div>
				<input class="col-lg-6" type="email" name="email">
			</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-lg-5 control-label">First name:</label>
			<div>
				<input class="col-lg-6" type="text" name="first_name">
			</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-lg-5 control-label">Last name:</label>
			<div>
				<input class="col-lg-6" type="text" name="last_name">
			</div>
			</div>
			
			<div class="form-group">
				<label for="password" class="col-lg-5 control-label">Password:</label>
			<div>
				<input class="col-lg-6" type="email" name="password">
			</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-lg-5 control-label">Confirm password:</label>
			<div>
				<input class="col-lg-6" type="email" name="password">
			</div>
			</div>
			<div class="form-group">
				<div >
					<button type="submit" class="col-lg-2 col-lg-offset-9 btn btn-success">
						Register
					</button>
				</div>
			</div>
			
		</form>

		
				
		<a href="signin" class="col-lg-offset-5">Already have an account? Signin</a>
	
	</div>

</div>





<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
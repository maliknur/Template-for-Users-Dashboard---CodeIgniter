<!DOCTYPE html>
<html lang="en">
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../../assets/main.css">
	<meta charset="UTF-8">
	<meta name="author" content="Malik Nur">
	<title>Sign In</title>
</head>
<body>
<?php include('header.php'); ?>


<div class="container">

	<div class="col-lg-6">
	
		<form action="login" method="post" class="form-horizontal jumbotron">
				
			<!-- ERROR DISPLAY SECTION -->
				<?php 
				if(!empty($this->session->flashdata('messages')))
				{
				echo "<div class=\"alert alert-warning\" role=\"alert\">";
				 echo $this->session->flashdata('messages');
				 $this->session->set_flashdata('messages', null);
				echo "</div>";
				}
				?>
		

			<div class="form-group well">
				<h3>Signin</h3>
				<br>
			<div>
			<div class="form-group">
				<label for="email" class="col-lg-4 control-label">Email:</label>
			<div>
				<input class="col-lg-6" type="email" name="email">
			</div>
			</div>
			
			<div class="form-group">
				<label for="password" class="col-lg-4 control-label">Password:</label>
			<div>
				<input class="col-lg-6" type="password" name="password">
			</div>
			</div>
			<div class="form-group">
				<div >
					<button type="submit" class="col-lg-2 col-lg-offset-8 btn btn-success">
						Sign in
					</button>
				</div>
			</div>
			
		</form>

		
				
		<!-- <a href="register" class="col-lg-offset-4">Don't have an account? Register</a> -->
	
	</div>

</div>





<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
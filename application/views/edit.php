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
	<title>Edit user</title>
</head>
<body>
<?php include('header.php'); ?>


<div class="row">

	
<div id="panel_left"	class="col-md-5 col-md-5 col-md-offset-1">
	<div class="panel panel-default">
	  <div class="panel-heading"><h4>Edit information</h4></div>
	  <div class="panel-body">

	    <form action="create" method="post" class="form-horizontal">
			<?php 
			if(!empty($this->session->flashdata('messages')))
			{
			echo "<div class=\"alert alert-warning\" role=\"alert\">";
			 echo $this->session->flashdata('messages');
			 $this->session->set_flashdata('messages', null);
			echo "</div>";
			}

			?>

	
		
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
				<input class="col-lg-6" type="password" name="password">
			</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-lg-5 control-label">Confirm password:</label>
			<div>
				<input class="col-lg-6" type="password" name="password2">
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
	  </div>
</div>
		
</div>


<div id="panel_right" class="col-md-5 col-md-5">
	
<div class="panel panel-default">
  <div class="panel-heading"><h4>Change password</h4></div>
	  <div class="panel-body">
	    

	<form action="create" method="post" class="form-horizontal">
			<?php 
			if(!empty($this->session->flashdata('messages')))
			{
			echo "<div class=\"alert alert-warning\" role=\"alert\">";
			 echo $this->session->flashdata('messages');
			 $this->session->set_flashdata('messages', null);
			echo "</div>";
			}

			?>

	
		
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
				<input class="col-lg-6" type="password" name="password">
			</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-lg-5 control-label">Confirm password:</label>
			<div>
				<input class="col-lg-6" type="password" name="password2">
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
	







	  </div>
</div>


</div>





<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
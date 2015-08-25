<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../../assets/main.css">
	
	<meta charset="UTF-8">
	<meta name="author" content="Malik Nur">
	
	<title>Register</title>
</head>
<body>

<?php include('header.php'); ?>


<div class="container">

	<div class="col-lg-6">
		<form action="create" method="post" class="form-horizontal jumbotron" enctype="multipart/form-data">
			
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
			
				<h3>Register</h3>
				
			<br>
			
				<div class="form-group">
					<div class="col-lg-offset-6">
					<a href="/dashboard" class="btn btn-info ">Return to Dashboard</a>
					</div>
				</div>
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
				
				<div class="form-group" style="position:relative;">
					<label class="col-lg-5 control-label"><a class='btn btn-default' href='javascript:;'>
					Upload photo...
					<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' 
					name="profile_img_path" size="20"  onchange='$("#upload-file-info").html($(this).val());'>
				</a></label>
					<div>
					<span class='col-lg-6 label label-info ' id="upload-file-info"></span>
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-2 col-lg-offset-9">
					<button type="submit" class="btn btn-success">
						Create
					</button>
					</div>
				</div>
			</div>
		</form>	
	</div>
</div>




<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
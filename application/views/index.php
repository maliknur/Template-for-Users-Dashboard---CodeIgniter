<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../../assets/main.css">
	<meta charset="UTF-8">
	<meta name="author" content="Malik Nur">
	
	<title>Welcome to the Test</title>
</head>
<body>

<!-- NAVBAR -->

	<?php include_once('header.php'); ?>
	

	<!-- JUMBOTRON part -->
	<div class="container">
		
		  <div class="jumbotron ">
		  	<h1>Welcome to the Test</h1>
		  	<p>We are going to build a cool application using MVC framework! This application was built with Coding Dojo member</p>
		  	<div class="btn-group">
		  		<a href="signin" class="btn btn-lg btn-info">Start</a>
		  	</div>
		  </div>

	</div>

<!-- MAIN SECTION -->
	

	<div class="container">
		<section>
			<div class="row">
				<div class="col-lg-4">
					<blockquote>
						<h3><a href="/dashboard">Manage Users</a></h3>
						<p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
					</blockquote>
				</div>
				<div class="col-lg-4">
					<blockquote>
						<h3><a href="/dashboard">Leave messages</a></h3>
						<p>Users will be able to leave a message to another user using this application.</p>
					</blockquote>
				</div>
				<div class="col-lg-4">
					<blockquote>
						<h3><a href="/dashboard">Edit Users Information</a></h3>
						<p>Admins will be able to edit another user's information (email address, first name, last name, etc.</p>
					</blockquote>
				</div>
			</div>
		</section>
	</div>




<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
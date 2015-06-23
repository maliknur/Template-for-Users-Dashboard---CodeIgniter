<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../../assets/main.css">
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body>
<?php 

include_once('header.php');
 ?>	

<div class="container">
	<div class="row">
		<h3>Manage users
		<a href="" class="btn btn-success navbar-btn navbar-right">Add new</a>
		</h3>
	</div>
	<br>
	<div class="row">
		<table class="table table-responsive table-striped table-bordered">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>email</th>
				<th>created at</th>
				<th>user level</th>
				<th>actions</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Michael Choi</td>
				<td>michael@village88.com</td>
				<td>Dec 24th 2012</td>
				<td>admin</td>
				<td>edit remove</td>
			</tr>
				<tr>
				<td>1</td>
				<td>Michael Choi</td>
				<td>michael@village88.com</td>
				<td>Dec 24th 2012</td>
				<td>admin</td>
				<td>edit remove</td>
			</tr>
				<tr>
				<td>1</td>
				<td>Michael Choi</td>
				<td>michael@village88.com</td>
				<td>Dec 24th 2012</td>
				<td>admin</td>
				<td>edit remove</td>
			</tr>
		</table>
	</div>
</div>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
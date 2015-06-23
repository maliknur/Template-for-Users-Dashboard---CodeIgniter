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
include('header.php');
 ?>	

<div class="container">
	<div class="row">
		<h3>Manage users
		<a href="/users/new" class="btn btn-success navbar-btn navbar-right">Add new</a>
		</h3>
	</div>
	<br>
		 <?php 
				if(!empty($this->session->flashdata('messages1')))
				{
				echo "<div class=\"alert alert-success col-lg-4\" role=\"alert\">";
				 echo $this->session->flashdata('messages1');
				 $this->session->set_flashdata('messages1', null);
				echo "</div>";
				}

				if(!empty($this->session->flashdata('messages')))
				{
				echo "<div class=\"alert alert-warning col-lg-4\" role=\"alert\">";
				 echo $this->session->flashdata('messages');
				 $this->session->set_flashdata('messages', null);
				echo "</div>";
				}
				?>

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
			

				<?php 
				

				
					foreach ($data as $key => $value2) {
				echo "<tr>";		
				echo "<td>".$value2['id']."</td>";
				echo "<td>".$value2['first_name']." ".$value2['last_name']."</td>";
				echo "<td>".$value2['email']."</td>";
				echo "<td>".$value2['created_at']."</td>";
				echo "<td>".$value2['user_level']."</td>";
				echo "<td><a href=\"/users/edit/".$value2['id']."\">edit</a>&nbsp;&nbsp;&nbsp;<a href=\"users/remove/".$value2['id']."\">remove</a></td>";	
				echo "</tr>";


					}
				
				

				?>
				
		</table>
	</div>
</div>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
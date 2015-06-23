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

<?php $user = $this->session->userdata('user');

		if($user['user_level'] == 'admin'){
		echo "<h3>Manage users";
		echo "<a href=\"/users/new\" class=\"btn btn-success navbar-btn navbar-right\">Add new</a>
		</h3>";

		}
		else
		{
		echo "<h3>All users</h3>";

		}
 ?>
		
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
		
		<?php 
			// Admin view of table	
			if($user['user_level'] == 'admin'){

			echo "<table class=\"table table-responsive table-striped table-bordered\">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>email</th>
				<th>created at</th>
				<th>user level</th>
				<th>actions</th>
			</tr>";
			
			foreach ($data as $key => $value2) {
					echo "<tr>";		
					echo "<td>".$value2['id']."</td>";
					echo "<td><a href=\"/users/show/".$value2['id']."\">".$value2['first_name']." ".$value2['last_name']."</a></td>";
					echo "<td>".$value2['email']."</td>";
					echo "<td>".date('M dS Y',strtotime($value2['created_at']))."</td>";
					echo "<td>".$value2['user_level']."</td>";
					echo "<td><a href=\"/users/edit/".$value2['id']."\">edit</a>&nbsp;&nbsp;&nbsp;<a href=\"/users/delete/".$value2['id']."\">remove</a></td>";	
					echo "</tr>";


					}
				}
			echo "</table>";
		
			// Normal view of table	

			if($user['user_level'] == 'normal'){

			echo "<table class=\"table table-responsive table-striped table-bordered\">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>email</th>
				<th>created at</th>
				<th>user level</th>
			
			</tr>";
			
			foreach ($data as $key => $value2) {
					echo "<tr>";		
					echo "<td>".$value2['id']."</td>";
					echo "<td><a href=\"/users/show/".$value2['id']."\">".$value2['first_name']." ".$value2['last_name']."</td>";
					echo "<td>".$value2['email']."</td>";
					echo "<td>".date('M dS Y',strtotime($value2['created_at']))."</td>";
					echo "<td>".$value2['user_level']."</td>";	
					echo "</tr>";
					}
				}
			echo "</table>";

		?>
	</div>
</div>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
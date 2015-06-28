<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../../assets/main.css">
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body>
<?php 
include('header.php');
 ?>	
<!-- begining of container -->
<div class="container"> 
	<div class="row">

		<?php $user = $this->session->userdata('user');

			if($user['user_level'] == 'admin')
			{
		?>
				<h3>Manage users
				<a href="/users/new" class="btn btn-success navbar-btn navbar-right">Add new</a>
				</h3>
		<?php	}
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
		if($user['user_level'] == 'admin'){ ?>

			<table class="table table-responsive table-striped table-bordered">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>email</th>
				<th>created at</th>
				<th>updated at</th>
				<th>user level</th>
				<th>actions</th>
			</tr>
			
			<?php
			foreach ($data as $key => $value2) 
			{ ?>

				<tr>
					<td><?= $value2['id'] ?></td>
					<td><a href="/users/show/<?= $value2['id']?>"> <?php echo $value2['first_name']." ".$value2['last_name']; ?></a></td>
					<td><a href="mailto: <?= $value2['email'] ?>" ><?= $value2['email'] ?></a></td>
					<td><?= date('M dS Y',strtotime($value2['created_at'])) ?></td>
					<td><?= date('M dS Y',strtotime($value2['updated_at'])) ?></td>
					<td><?= $value2['user_level'] ?></td>

					<!-- admins can not be deleted from user dashboard	 -->
				
					<?php
					if($value2['user_level'] == 'admin'){
					echo "<td><a href=\"/users/edit/".$value2['id']."\">edit</a></td>";	
					}
					else{
					echo "<td><a href=\"/users/edit/".$value2['id']."\">edit</a>&nbsp;&nbsp;&nbsp;<a href=\"/users/delete/".$value2['id']."\">remove</a></td>";		
					} ?>
				</tr>
				
				<?php 
				}
			}?>

			</table>
		
			<!-- Normal view of table	 -->
			<?php
			if($user['user_level'] == 'normal'){
			?>	
			<table class="table table-responsive table-striped table-bordered">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>email</th>
				<th>created at</th>
				<th>user level</th>
			
			</tr>
			<?php 
			foreach ($data as $key => $value2) {
			?>	
				<tr>		
				<td><?= $value2['id'] ?></td>
				<td><a href="/users/show/ <?= $value2['id']?> "> <?php echo $value2['first_name']." ".$value2['last_name']; ?></td>
				<td><?= $value2['email'] ?></td>
				<td><?= date('M dS Y',strtotime($value2['created_at'])) ?></td>
				<td><?= $value2['user_level'] ?></td>	
				</tr>
				
			<?php		
				}
			}
			?>	
			</table>
	</div>
</div><!--  end of container -->

	<!-- scripts for loading jQuery and bootstrap js files -->
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
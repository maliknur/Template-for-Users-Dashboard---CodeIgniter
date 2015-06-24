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
	<div id="return_dash">
	<a href="/dashboard" class="btn btn-info col-lg-offset-10 col-md-offset-5 col-xs-offset-1">Return to Dashboard</a>
	</div>

</div>
<div class="row">
	
<div id="panel_left"	
class="col-md-5 col-md-offset-1">
	<div class="panel panel-default">
	  <div class="panel-heading"><h4>Edit information</h4></div>
	  <div class="panel-body">
	

	<!-- FORM FOR UPDATE USER INFO -->
	    <form action="/update" method="post" class="form-horizontal">
			<?php 
			if(!empty($this->session->flashdata('messages')))
			{
			echo "<div class=\"alert alert-warning\" role=\"alert\">";
			 echo $this->session->flashdata('messages');
			 $this->session->set_flashdata('messages', null);
			echo "</div>";
			}

			if(!empty($this->session->flashdata('messages1')))
			{
			echo "<div class=\"alert alert-success\" role=\"alert\">";
			 echo $this->session->flashdata('messages1');
			 $this->session->set_flashdata('messages1', null);
			echo "</div>";
			}

			?>

	
		
			<div class="form-group">
				<label for="email" class="col-lg-5 control-label">Email:</label>
			<div>
				<input class="col-lg-6" type="email" name="email" value="<?= $result['email']; ?>">
				<input type="hidden" name="user_id" value="<?= $result['id']; ?>">
			</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-lg-5 control-label">First name:</label>
			<div>
				<input class="col-lg-6" type="text" name="first_name" value="<?= $result['first_name']; ?>">
			</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-lg-5 control-label">Last name:</label>
			<div>
				<input class="col-lg-6" type="text" name="last_name" value="<?= $result['last_name']; ?>">
			</div>
			</div>
			<?php  

				$user = $this->session->userdata('user');
				
				if($user['user_level']== 'admin'){

		echo  "<div class=\"form-group\">
				<label for=\"level\" class=\"col-lg-5 control-label\">User level:</label>
			<div class=\"col-lg-7\">
				<select class=\"col-lg-6 form-control\" id=\"select\"  name=\"user_level\">";
				
					
					if($result['user_level'] == 'normal'){ 
						echo "<option  value=\"normal\" selected =\"selected\">normal 
						</option>";
						echo "<option value=\"admin\">admin</option>
						</select>";
					}
					else { 
						echo "<option  value=\"admin\" selected =\"selected\">admin 
						</option>";
						echo "<option value=\"normal\">normal</option>
						</select>";
					}


					echo "</div></div>";
				}
				?>
			
			
			<div class="form-group">
				<div >
					<button type="submit" class="col-lg-2 col-lg-offset-9 btn btn-success">
						Save
					</button>
				</div>
			</div>
			
		</form>
	  </div>
</div>
		
</div>




<div id="panel_right" class="col-md-5">
	
<div class="panel panel-default">
  <div class="panel-heading"><h4>Change password</h4></div>
	  <div class="panel-body">
	   
	    <!-- FORM TO UPDATE PASSWORD -->

	<form action="/pwdupdate" method="post" class="form-horizontal">
			<?php 
			if(!empty($this->session->flashdata('messages_pwd')))
			{
			echo "<div class=\"alert alert-warning\" role=\"alert\">";
			 echo $this->session->flashdata('messages_pwd');
			 $this->session->set_flashdata('messages_pwd', null);
			echo "</div>";
			}

			?>

			
			<div class="form-group">
				<label for="password" class="col-lg-5 control-label">Password:</label>
			<div>
				<input class="col-lg-6" type="password" name="password">
				<input type="hidden" name="user_id" value="<?= $result['id']; ?>">
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
					<button type="submit" class="col-lg-4 col-lg-offset-7 btn btn-success">
						Update password
					</button>
				</div>
			</div>
			
		</form>
	

	  </div>
</div>


</div>

</div>

<div class="row">
	
<div class="col-md-10 col-md-offset-1">
	
	<div class="panel panel-default" >
	<div class="panel-heading"><h4>Description</h4>
	</div>
	<div class="panel-body" id="description">

		<form action="/description" method="post" class="form-horizontal">
		
			<div class="form-group">
				<textarea name="description" class="form-control" rows="3" ><?= $result['description']; ?></textarea>
			<div>
				<button type="submit" class="col-lg-1 col-lg-offset-11 btn btn-success">
						Save
					</button>
				<input type="hidden" name="user_id" value="<?= $result['id']; ?>">
			</div>
			</div>
		</form>
	</div>
	</div>
</div>


</div>








<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
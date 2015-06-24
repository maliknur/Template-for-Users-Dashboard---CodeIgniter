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
	<title>User Information</title>
</head>
<body>
<?php include('header.php'); ?>

<!-- beginning of container -->

<div class="container">
<div class="row">
	<div class="col-xs-11 col-xs-offset-1">
		<h3><?= $result['first_name'] . " " . $result['last_name'] ?></h3>
		<table id="wall_table" class="table table-condensed ">
			<tr>
				<th>Registered at:</th>
				<td><?= date('M dS Y', strtotime($result['created_at'])) ?></td>
			</tr>
			<tr>
				<th>User ID:</th>
				<td><?= "# " .$result['id'] ?></td>
			</tr>
			<tr>
				<th>Email address:</th>
				<td><?= $result['email'] ?></td>
			</tr>
			<tr>
				<th>Description:</th>
				<td><?= $result['description'] ?></td>
			</tr>
		</table>
	</div>
</div>	

<div class="row">
	<div class="col-xs-8 col-xs-offset-2 message">
		<h3>Leave a message for <?= $result['first_name'];  ?></h3>
		<form action="/users/post" method="post" class="form-horizontal">
				
			<div class="form-group">
			<textarea name="description" class="form-control" rows="3" ></textarea>
			<div>
			<button type="submit" class="col-xs-offset-11 btn btn-success">Post
			</button>
			<input type="hidden" name="user_id" value="<?= $result['id']; ?>">
			</div>
			</div>
		</form>

	</div>
</div>

<!-- message print section -->

<div class="row">
	<div class="col-xs-8 col-xs-offset-2 message bordered1">

<?php 
	
	if(!empty($wall))
	{
	echo "<ul class=\"list-group\">";
	foreach ($wall as $key => $value) {
		
		echo "<li><p><b>".$value['first_name']." ".$value['last_name']."</b> wrote <span style=\"margin-left: 300px;\">".$value['created_at']."</span><p></li>
			<li class=\"bordered\"><p>
		". $value['message']."</p></li>";
	
		
		$comments = $this->db->query("SELECT c.messages_id, u.first_name, u.last_name, c.comment, c.id, c.created_at FROM comments c JOIN users u on u.id = c.users_id
			WHERE c.messages_id = ".$value['id'])->result_array();

		
			foreach ($comments as $key2 => $value2) {
 	
			 // DISPLAY COMMENTS
			echo "<li class = \"intend\"><p>".$value2['first_name']. " ". $value2['last_name']." - ". $value2['created_at'] ." 
			</p></li><li class = \"intend\"><p>".$value2['comment'] ."</p></li>";
			 
			}


		echo "<ul class=\"list-group col-lg-9 col-lg-offset-1\"><li>Post a comment</li><li><form action=\"comment\" method=\"post\">
			<textarea name=\"comment\" cols=\"90\ rows=\"10\">
			</textarea>
			<input type=\"hidden\" name=\"message_id\" value=\"".$value['id']."\">
			<button type=\"submit\" class=\"col-lg-2 col-md-offset-12 btn btn-success\">
						Post
					</button>
			</form></li></ul>";

	}
	echo "</ul>";
	}
 ?>

	</div>
</div>



</div> 
<!-- end of container -->


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
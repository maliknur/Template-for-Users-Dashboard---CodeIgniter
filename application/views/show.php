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
<?php include('header.php'); 
$viewer_id = $this->session->userdata['user'];


?>

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

<!-- Leave message area - textarea -->

<div class="row">
	<div class="col-xs-8 col-xs-offset-2 message">
		<h3>Leave a message for <?= $result['first_name'];  ?></h3>
		<form action="/users/post" method="post" class="form-horizontal">
				
			<div class="form-group">
			<textarea name="message" class="form-control" rows="3" ></textarea>
			<div>
			<button type="submit" class="col-xs-offset-11 btn btn-success">Post
			</button>
			<input type="hidden" name="user_id" value="<?= $viewer_id['user_id']; ?>">
			<input type="hidden" name="messageboard_id" value="<?= $result['id'] ?>">
			</div>
			</div>
		</form>

	</div>
</div>

<!-- message print section -->

<?php 
	
	if(!empty($wall))
	{
	
	foreach ($wall as $key => $value) {

	//message display
		
	echo "<div class=\"row\">";
		echo "<div class=\"col-xs-8 col-xs-offset-2 message bordered1\">";
			echo "<h5><i>" .$value['first_name']. " ". $value['last_name']. " wrote <span class =\"col-xs-offset-7\"><small>". $value['created_at']. "</small></span></i></h5>";
			echo "<p>" .$value['message']. "</p>";
		echo "</div>";
	echo "</div>";

		//comments under the message

		$comments = $this->db->query("SELECT c.messages_id, u.first_name, u.last_name, c.comment, c.id, c.created_at FROM comments c JOIN users u on u.id = c.users_id
			WHERE c.messages_id = ".$value['id'])->result_array();

		if(!empty($wall))
		{
			
			foreach ($comments as $key2 => $value2) {

			echo "<div class=\"row\">";
					echo "<div class=\"col-xs-7 col-xs-offset-3 message bordered1\">";
						echo "<h5><i>". $value2['first_name']." ". $value2['last_name']. " wrote<span class =\"col-xs-offset-6\"><small>" .$value2['created_at']. "</small></span></i> </h5>";
						echo "<p>" .$value2['comment']. "</p>";

					echo "</div>";
				echo "</div>";	

			}
		}

			// Leave comment area - textarea

			echo "<div class=\"row\">";
				echo "<div class=\"col-xs-7 col-xs-offset-3 message bordered1\">";
					echo "<form action=\"/users/comment\" method=\"post\" class=\"form-horizontal\">";
					echo "<div class=\"form-group\">";
						
						echo "<textarea name=\"comment\" class=\"form-control\" rows=\"3\" placeholder=\"write a message\"></textarea>";
					echo "<div>";

					echo "<input type=\"hidden\" name=\"user_id\" value=" . $viewer_id['user_id'] . ">";
					echo "<input type=\"hidden\" name=\"messages_id\" value=" . $value['id'] . ">";
					echo "<input type=\"hidden\" name=\"messageboard_id\" value=". $result['id'] .">";

						echo "<button type=\"submit\" class=\"col-xs-offset-11 btn btn-success\">Post</button>";
						
					echo "</div>";
					echo "</div>";
					echo "</form>";		
				echo "</div>";
			echo "</div>";



	}
}
?>


</div> 
<!-- end of container -->


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
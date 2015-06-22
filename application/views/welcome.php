<?php 
$user = $this->session->userdata('user');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../assets/main.css">
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<body>

<div class="wrapper">
<p class="logoff"><a href="logout">Logoff</a></p>
<h3>Welcome, <?= $user['first_name']; ?></h3>
<br><br>
	<div class="line">
		
	<h2><span>User Information</span></h2>
	<p>
	<?php 
	
	echo "<p> First name: " .$user['first_name']."</p>";
	echo "<p> Last name: " .$user['last_name'] . "</p>"; 
	echo "<p> Email: " .$user['email'] . "</p>"; 

	 ?>

	</p>

	</div>


</div>
	
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../assets/main.css">
	<meta charset="UTF-8">
	<title>Registration</title>

</head>
<body>
	
<div class="wrapper">
<div class="errors">
<?php 

if(!empty($this->session->flashdata('messages')))
{
 echo $this->session->flashdata('messages');

}
?>
</div>
<div class="messages">
<?php 

if(!empty($this->session->flashdata('messages1')))
{
 echo $this->session->flashdata('messages1');

}
?>
</div>



<div class="line">

<h2><span>Login<span></h2>

<p>	
<form action="login" method="post">
	

<label for="email">Email:</label>
<input type="email" name="email">
<label for="password">Password:</label>
<input type="password" name="password">
<input type="submit" value="Login">

</form>	
</p>
</div>


<div class="line">

<h2><span>Register<span></h2>

<p>	
<form action="create" method="post">
<label for="name">First Name:</label>
<input type="text" name="first_name">
<label for="name">Last Name:</label>
<input type="text" name="last_name">
<label for="email">Email:</label>
<input type="email" name="email">
<label for="password">Password:</label>
<input type="password" name="password">
<label for="password">Confirm Password:</label>
<input type="password" name="password2">
<input type="submit" value="Login">

</form>	
</p>




</div>




</div>

</body>
</html>
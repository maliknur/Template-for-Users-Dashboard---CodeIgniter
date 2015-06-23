	<nav class="navbar-inverse navbar-fixed-top" id="my-navbar">
		<div class="container">
			<div class="navbar-header">
				<button type= "button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a href="" class="navbar-brand">Test App</a>
			</div>

		<div class="collapse navbar-collapse">
		<?php if(!empty($this->session->userdata('user'))){
			$user = $this->session->userdata('user');
			
			echo "<a href=\"/logoff\" class=\"navbar-btn navbar-right\">Log off</a>";

			 } 
		 	else 
		 	{
			echo "<a href=\"signin\" class=\"navbar-btn navbar-right\">Sign in</a>";
			}
			?>	
			<ul class="nav navbar-nav">
				<li><a href="/">Home</a>
				<li><a href="/dashboard">Dashboard</a>
				<li><a href="/users/edit">Profile</a>
				<li><a href="#">Home</a>	
			</ul>

			<?php 
			if(!empty($this->session->userdata('user'))){
			echo "<span class=\"navbar-right navbar-btn\" id=\"user_logoff\">";
			echo $user['first_name']." ".$user['last_name'] .":&nbsp; </span>";
			}


			 ?>
			
			
			
		</div>

		</div>

	</nav>
<!DOCTYPE html>

<html>
<head>
	<title>Event Management System</title>
	<link rel="stylesheet" type="text/css" href="event.css">
</head>
<body>

<div class="user-logo">
	
	<h2>Event Managment System</h2>

</div>



<div class="admin-login">
	<div class="login">
		<h4>Login</h4>
	</div>
	<hr style="width: 500px;">


	<div class="login-form">
        <form action="adminLogin.php"  method="POST">
		 	<p><input id="adminname" type="text" name="username" placeholder="Username"></p>


		 	<p><input id="password" type="password" name="password" placeholder="Password"></p>

		 	<p><button name="login">Login</button></p>
		 	<?php 
        if (isset($_GET['loginError'])){
      	  ?>



        <div style="margin-left: 30px;">Invalid Username or Password</div>

      	  <?php 
            }
      	   ?>

		 	</form>
       
	</div>


</div>

</body>
</html>

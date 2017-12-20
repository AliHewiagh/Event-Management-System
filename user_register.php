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


<hr style="color: gold; border-style: solid; width: 1363px;">
<hr style="color: gold; border-style: solid; width: 1363px;">
<hr style="color: gold; border-style: solid; width: 1363px;">


<div class="user-login">
	<div class="login">
		<h4>Login</h4>
	</div>
	<hr style="width: 500px;">


	<div class="login-form">
        <form action="user_checklogin.php"  method="POST">
		 	<p><input id="username1" type="text" name="username" placeholder="Username"></p>


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





<div class="user-signup">


<div class="signup">
		<h4>Signup</h4>
	</div>
	<hr style="width: 500px;">

	
	<div class="signup-form">
		

       
		 <form action="signup_validation_backend.php"  method="POST" onsubmit="return Validate()" name="vform">
		 	<p><input type="text" id="username2" name="username" placeholder="Username" ></p>
		 	 <div id="username_error" class="error" style="margin-left: 30px;"></div>
		 	

       
		 	<input type="text" id="displayname" name="dispalyname" placeholder="Dispaly Name" >
		 	<div id="dispalyname_error" class="error" style="margin-left: 30px;"></div>
		 	

		 	<p><input type="password" id="password2" name="password" placeholder="Password" ></p>
		 	<div id="password_error" class="error" style="margin-left: 30px;"></div>
		 	

		 	<p><input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" ></p>
		 	<div id="confirmPassword_error" class="error" style="margin-left: 30px;"></div>

		 	<p><input name="address" id="address" type="text" placeholder="Address" required></p>
		 	<div id="address_error" class="error" style="margin-left: 30px;"></div>
		 	

		 	<p><input type="text" id="phonenumber" name="phonenumber" placeholder="Phone Number" ></p>
		 	<div id="phoneNumber_error" class="error" style="margin-left: 30px;"></div>
		 

		 	<p><button name="signup">Signup</button></p>
		 	<?php 
        if (isset($_GET['error'])){
      	  ?>



        <div  style="margin-left: 30px;">Invalid Registration...Try again</div>

      	  <?php 
            }
      	   ?>


      	   	<?php 
        if (isset($_GET['right'])){
      	  ?>



        <div style="margin-left: 30px;">Registred Successfully...Use your username and password to login</div>

      	  <?php 
            }
      	   ?>
		 </form>

	</div>
	


</div>

</body>
</html>



<?php 

   include("registration_validation.js");

 ?>




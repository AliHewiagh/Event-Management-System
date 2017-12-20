<?php 
include("dbconnection.php");


   $cat_sql="SELECT * FROM user WHERE username='".$_GET['username']."'";
   $cat_query=mysqli_query($dbconnect, $cat_sql);
   $cat_rs=mysqli_fetch_assoc($cat_query);



 ?>







<div class="event-details-box">
	

	<h3 style="margin-bottom: 60px">User Info</h3>
<form action="deleteuser.php" method="POST">
	<p><label>Name: </label><span id="span8"><?php echo $cat_rs['username']; ?></span></p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Phone Number: </label><span id="span9"><?php echo $cat_rs['phone_number']; ?></span></p>
	<input type="hidden" name="user_name" value="<?php echo $cat_rs['username']; ?>">
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Address: </label><span id="span10"><?php echo $cat_rs['address']; ?></span></</p>
	<!--<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Address: </label><span id="span11">Justin Paper</span></p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Participated Events: </label><span id="span12">Justin Paper</span></p>-->
	<br>
    <button name="remove">Remove</button>

</form>



</div>
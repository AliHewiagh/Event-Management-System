<?php 
include("dbconnection.php");

   $cat_sql="SELECT * FROM event";
   $cat_query=mysqli_query($dbconnect, $cat_sql);
   $cat_rs=mysqli_fetch_assoc($cat_query);



 ?>


<div class="event-details-box">
	

	<h3 style="margin-bottom: 60px">Event Details</h3>
    <form action="event_update_remove.php"  method="POST">
	<p><label>Name: </label><span id="span1"><input type="text" name="event_name" value="<?php echo $cat_rs['name']; ?>" required></span></p>


	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Type: </label><span id="span2"><input type="text" name="event_type" value="<?php echo $cat_rs['type']; ?>" required></span></p>


	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Location: </label><span id="span3"><input type="text" name="event_location" value="<?php echo $cat_rs['location']; ?>" required></span></</p>


	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Seat Capacity: </label><span id="span7"><input type="text" name="event_seats" value="<?php echo $cat_rs['seats']; ?>" required></span></p>


	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Food Avilable: </label><span id="span5"><input type="text" name="event_food" value="<?php echo $cat_rs['food']; ?>" required></span></p>


	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Price: </label><span id="span6"><input type="text" name="event_price" value="<?php echo $cat_rs['price']; ?>" required></span></p>
	<br>
    <p><input type="hidden" name="eventID" value="<?php echo $_GET['eventID']; ?>"></p>

    <button name="update">Update</button>
    <button name="remove">Delete</button>

    </form>








</div>
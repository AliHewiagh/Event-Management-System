<?php 
include("dbconnection.php");
    $eventID = $_GET['eventID'];

   $cat_sql="SELECT * FROM event WHERE ID=".$eventID;
   $cat_query=mysqli_query($dbconnect, $cat_sql);
   $cat_rs=mysqli_fetch_assoc($cat_query);

?>




<div class="event-details-box">
	

	<h3 style="margin-bottom: 60px">Event Details</h3>

	<form action="myeventcancelation.php" method="POST">

	<p><label>Name: </label><span id="span1"><?php echo $cat_rs['name']; ?></span></p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Type: </label><span id="span2"><?php echo $cat_rs['type']; ?></span></p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Location: </label><span id="span3"><?php echo $cat_rs['location']; ?></span></</p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	
	<p><label>Food Avilable: </label><span id="span5"><?php echo $cat_rs['food']; ?></span></p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Price: </label><span id="span6"><?php echo $cat_rs['price']; ?></span></p>
	<br>
     
	<input type="hidden" name="eventID" value="<?php echo $_GET['eventID'] ?>">
	
    <button  name="cancel">Cancel</button>


    </form>





</div>
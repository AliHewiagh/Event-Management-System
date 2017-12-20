<?php 
include("dbconnection.php");

   // session_start();
    $eventID = $_GET['eventID'];
   

   $cat_sql="SELECT * FROM event WHERE ID=".$eventID;
   $cat_query=mysqli_query($dbconnect, $cat_sql);
   $cat_rs=mysqli_fetch_assoc($cat_query);


  
   
   $username = $_SESSION['user']['username'];

   $ca_sql="SELECT * FROM participate WHERE username='".$_SESSION['user']['username']."' AND ID=".$eventID."";
  // echo $ca_sql;
   $ca_query=mysqli_query($dbconnect, $ca_sql);
  // echo $ca_query;
   $ca_rs=mysqli_fetch_assoc($ca_query);

 

 ?>







<div class="event-details-box">
	

	<h3 style="margin-bottom: 60px">Event Details</h3>

	<form action="participate.php" method="POST">

	<p><label>Name: </label><span id="span1"><?php echo $cat_rs['name']; ?></span></p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Type: </label><span id="span2"><?php echo $cat_rs['type']; ?></span></p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Location: </label><span id="span3"><?php echo $cat_rs['location']; ?></span></</p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Remaining Seats: </label><span id="span4"><?php echo $cat_rs['seats']; ?></span></p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Food Avilable: </label><span id="span5"><?php echo $cat_rs['food']; ?></span></p>
	<hr style="width: 570px; margin-top: 10px; margin-left: 20px;">
	<p><label>Price: </label><span id="span6"><?php echo $cat_rs['price']; ?></span></p>
	<br>
     
	<input type="hidden" name="eventID" value="<?php echo $_GET['eventID'] ?>">
	<?php
	if(mysqli_num_rows($ca_query) < 1){
   ?>
    <button id="par" name="participate">Participate</button>

    <?php } ?>


    </form>





</div>
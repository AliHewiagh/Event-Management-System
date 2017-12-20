<?php 
include("dbconnection.php");



if(isset($_POST['update'])){

	
 


	$name = $_POST['event_name'];
	$type = $_POST['event_type'];
	$location = $_POST['event_location'];
	$seats = $_POST['event_seats'];
	$food = $_POST['event_food'];
    $price = $_POST['event_price'];
    $eventID = $_POST['eventID'];


   
           
    $newcat_sql="UPDATE event SET name='".$name."', type='".$type."', location='".$location."', seats='".$seats."', food='".$food."', price='".$price."' WHERE id=".$eventID;
         $newcat_query=mysqli_query($dbconnect, $newcat_sql);


         if($newcat_query){
         	  header("Location:index.php?page=hmoe&admin=admin&update=update");
         }else{
             header("Location:index.php?page=hmoe&admin=admin&notupdate=notupdate");
}
}




if(isset($_POST['remove'])){


    $eventID = $_POST['eventID'];
    //echo $eventID;
    //die();



   $newcat_sql="DELETE FROM event WHERE id=".$eventID;
    $newcat_query=mysqli_query($dbconnect, $newcat_sql);

         if($newcat_query){
         	  header("Location:index.php?page=hmoe&admin=admin&deleted=deleted");
         }else{
             header("Location:index.php?page=hmoe&admin=admin&notdeleted=notdeleted");
}




}


?>


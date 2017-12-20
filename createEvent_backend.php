<?php


include("dbconnection.php");




if(isset($_POST['create'])){

    $name = $_POST['event_name'];
	$type = $_POST['event_type'];
	$location = $_POST['event_location'];
	$seats = $_POST['event_seats'];
	$food = $_POST['event_food'];
    $price = $_POST['event_price'];


    $newcat_sql="INSERT INTO event (name, type, location, seats, food, price) VALUES ('".$name."','".$type."', '".$location."', '".$seats."','".$food."','".$price."')";
         $newcat_query=mysqli_query($dbconnect, $newcat_sql);


         if($newcat_query){
         	  header("Location:index.php?page=hmoe&admin=admin&create=done");
         }else{
             header("Location:index.php?page=hmoe&admin=admin&createInvalid=done");

         }




      
    




}


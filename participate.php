<?php 
include("dbconnection.php");
session_start();


if(isset($_POST['participate'])){

  




 $eventID = $_POST['eventID'];

 

         $newcat_sql="INSERT INTO participate (ID, username) VALUES ('".$eventID."','".$_SESSION['user']['username']."')";
         $newcat_query=mysqli_query($dbconnect, $newcat_sql);

         if($newcat_query){
            

             $par_sql="UPDATE event SET seats=seats - 1 WHERE id=".$eventID;
                 $par_query=mysqli_query($dbconnect, $par_sql);

                 if($par_query){

                 	

                      header("Location:index.php?user=user&participated=participated");
                 }
 

         	
         }else{
         	echo "no";
         }
}
?>
<?php
session_start();
include("dbconnection.php");

   if(isset($_POST['cancel'])){

   
    $eventID = $_POST['eventID'];


    


    $newcat_sql="DELETE FROM participate WHERE username='".$_SESSION['user']['username']."' AND ID=".$eventID."";
    $newcat_query=mysqli_query($dbconnect, $newcat_sql);

         if($newcat_query){
         	  $par_sql="UPDATE event SET seats=seats + 1 WHERE id=".$eventID;
                 $par_query=mysqli_query($dbconnect, $par_sql);
               
         	  header("Location:index.php?page=hmoe&user=user&deleted=deleted");
         	
         }else{
             header("Location:index.php?page=hmoe&user=user&notdeleted=notdeleted");
}




   }
?>
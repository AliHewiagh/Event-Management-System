<?php 
include("dbconnection.php");



if(isset($_POST['remove'])){



    
  

   $newcat_sql="DELETE FROM user WHERE username='".$_POST['user_name']."'";
    $newcat_query=mysqli_query($dbconnect, $newcat_sql);

         if($newcat_query){
         	   
         	  header("Location:index.php?page=hmoe&admin=admin&userdeleted=userdeleted");
         }else{
         	
             header("Location:index.php?page=hmoe&admin=admin&usernotdeleted=usernotdeleted");
}




}




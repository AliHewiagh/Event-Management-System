<?php

include("dbconnection.php");

$username = $_POST['username'];
$message = $_POST['message'];
$subject = $_POST['subject'];

 $newcat_sql="INSERT INTO message (subject, description, state, username, adminname, sender) VALUES ('".$subject."','".$message."',0, '".$username."','admin',0)";
         $newcat_query=mysqli_query($dbconnect, $newcat_sql);


         if ($newcat_query) {

         	 header("Location:index.php?admin=admin&messagesent=messagesent");
         }else
         {
         	header("Location:index.php?admin=admin&messagenotsent=messagenotsent");
         }

      

	
?>
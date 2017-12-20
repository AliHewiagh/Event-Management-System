<?php

include("dbconnection.php");
session_start();
if(isset($_POST['user_sendmessage'])){

      $message = $_POST['usermessage'];
      $subject = $_POST['usersubject'];



       $newcat_sql="INSERT INTO message (subject, description, state, username, adminname, sender) VALUES ('".$subject."','".$message."',0, '".$_SESSION['user']['username']."','admin',1)";
         $newcat_query=mysqli_query($dbconnect, $newcat_sql);


         if ($newcat_query) {

         	 header("Location:index.php?user=user&messagesent=messagesent");
         }else
         {
         	header("Location:index.php?user=user&messagenotsent=messagenotsent");
         }

      

	}

?>

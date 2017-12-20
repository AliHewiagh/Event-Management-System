<?php
include("dbconnection.php");

/*Check for status 0 for not opend , one for opend*/

 //$newcat_sql="SELECT * FROM message WHERE username='".$_SESSION['user']['username']."' AND state="0" AND sender="0"";
 $newcat_sql="SELECT * FROM message WHERE username='".$_SESSION['user']['username']."' AND state=0 AND sender=0";
    $newcat_query=mysqli_query($dbconnect, $newcat_sql);
   $cat_rs=mysqli_fetch_assoc($newcat_query);

  ?>




  <div class="mymessages">
  	

  	<h3 style="margin-bottom: 40px">My Messages</h3>



<?php 

     if(mysqli_num_rows($newcat_query) == 0){
?>
       
       <div class="my-event-box">
        <div class="my-event-name">

          <p>You dont have messages at this moment</p>
        
         </div>

         </div>


<?php 
    
     }

?>



<?php 

 if(mysqli_num_rows($newcat_query) > 0){
do{

 ?>

	

<div class="my-event-box">
       	<div class="my-event-name">

       		<p>From: Admin</p>
          <p>Subject: <?php echo $cat_rs['subject']; ?></p>


       	</div>

       	<div class="my-event-setting">
       		<a href="index.php?page=viewmessage&user=user&messageID=<?php echo $cat_rs['messageID']; ?>"><p>View</p></a>
       	</div>
         
         

       </div>

 
<?php

  }while ($cat_rs=mysqli_fetch_assoc($newcat_query));
    
  
}
 ?>




  </div>
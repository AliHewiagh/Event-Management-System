<?php 
include("dbconnection.php");


   $cat_sql="SELECT * FROM message WHERE messageID=".$_GET['messageID'];
   $cat_query=mysqli_query($dbconnect, $cat_sql);
   $cat_rs=mysqli_fetch_assoc($cat_query);



  $state = 1; /* one means opened  /////// zero means not opend  */

  $messageID = $_GET['messageID'];

 $newcat_sql="UPDATE message SET state=".$state." WHERE messageID=".$messageID;
    $newcat_query=mysqli_query($dbconnect, $newcat_sql);



 ?>


 







<div class="userviewmessage">


<p>From: <?php  echo $cat_rs['username']; ?></p>
<p style="margin-bottom: 20px;">Subject: <?php  echo $cat_rs['subject']; ?></p>

<textarea rows="10" cols="60" disabled><?php  echo $cat_rs['description']; ?></textarea>
	

  <form action="reply_message.php" method="POST">


    
   <p><textarea rows="10" cols="60" name="message" placeholder="Reply"></textarea></p> 

  	<input type="hidden" name="username" value="<?php echo $cat_rs['username']; ?>">
    <input type="hidden" name="subject" value="<?php echo $cat_rs['subject']; ?>">

  	<button>Reply</button>


  </form>


</div>

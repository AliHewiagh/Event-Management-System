
<?php
/* update status to 1*/
include("dbconnection.php");



    $cat_sql="SELECT * FROM message WHERE username='".$_SESSION['user']['username']."' AND state=0 AND sender=0";
 
    $cat_query=mysqli_query($dbconnect, $cat_sql);
     $cat_rs=mysqli_fetch_assoc($cat_query);


  ?>


<div class="userviewmessage">


<p>From: Admin</p>
<p style="margin-bottom: 20px;">Subject: <?php echo $cat_rs['subject']; ?></p>

<textarea rows="20" cols="70" disabled><?php echo $cat_rs['description']; ?></textarea>
	

<?php 

$messageID = $_GET['messageID'];
 $newcat_sql="UPDATE message SET state=1 WHERE messageID=".$messageID;
         $newcat_query=mysqli_query($dbconnect, $newcat_sql);

 ?>


</div>

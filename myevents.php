<?php 
include("dbconnection.php");



   

   $cat_sql="SELECT * FROM event WHERE ID in (SELECT ID from participate WHERE username ='".$_SESSION['user']['username']."')";
 
   $cat_query=mysqli_query($dbconnect, $cat_sql);
   $cat_rs=mysqli_fetch_assoc($cat_query);


?>





<div class="myevents">
	

	<h3 style="margin-bottom: 40px">My Events</h3>






<?php 

     if(mysqli_num_rows($cat_query) == 0){
?>
       
       <div class="my-event-box">
        <div class="my-event-name">

          <p>You dont have event at this moment</p>
        
         </div>

         </div>


<?php 
    
     }


     /*------------------------End of first case ------------*/
     ?>



<?php 
if(mysqli_num_rows($cat_query) > 0){

  do{

 ?>


<div class="my-event-box">
       	<div class="my-event-name">
          

       		<p>Name: <?php echo $cat_rs['name'] ?></p>

       	</div>

       	<div class="my-event-setting">
       		<a  href="index.php?page=myeventdetails&user=user&eventID=<?php echo $cat_rs['ID'] ?>"><p id="viewevent" >View</p></a>
       		

       	</div>
         
         

       </div>

 
<?php
}while ($cat_rs=mysqli_fetch_assoc($cat_query));
  

   
}
 ?>






</div>
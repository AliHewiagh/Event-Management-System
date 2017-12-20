<?php 
include("dbconnection.php");


      $cat_sql="SELECT * FROM event";
      $cat_query=mysqli_query($dbconnect, $cat_sql);
      $cat_rs=mysqli_fetch_assoc($cat_query);


 ?>



<div class="adminevent">

<div class="adminnav">
	

<ul>
	<a href="index.php?page=createEvent&admin=admin" style="color: white; text-decoration: none;"><li>Add</li></a>
</ul>

</div>

<h3 style="margin-bottom: 40px">Events </h3>








<?php 

     if(mysqli_num_rows($cat_query) == 0){
?>
        <div class="my-event-box">
        <div class="my-event-name">

          <p>No Events at This Time</p>
         </div>
         </div>


<?php 
    
     }


     /*------------------------End of first case ------------*/
     ?>









   
	<?php 
  /*------------------------Start of second case ------------*/
 // elseif(mysqli_num_rows($register_query) > 0){
 if(mysqli_num_rows($cat_query) > 0){
do{
  
 
 	?>


   <div class="my-event-box">
       	<div class="my-event-name">
       	<p>Name: <?php echo $cat_rs['name']; ?></p>
       	</div>



       	<div class="my-event-setting">
       	<a href="index.php?page=adminviewevent&admin=admin&admin=admin&eventID=<?php echo $cat_rs['ID']; ?>"><p>View</p></a>
       	</div>
         
    </div>

 
<?php  
}while($cat_rs=mysqli_fetch_assoc($cat_query));


 }
/*------------------------End of second case ------------*/
 ?>









</div>


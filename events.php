<?php 
include("dbconnection.php");

   $cat_sql="SELECT * FROM event";
   $cat_query=mysqli_query($dbconnect, $cat_sql);
   $cat_rs=mysqli_fetch_assoc($cat_query);

 ?>





<div class="events">
	

<p>Events User</p>



<?php 

     if(mysqli_num_rows($cat_query) == 0){
?>
       
        <div class="event-box">

          <p>No Events at This Time</p>
        
         </div>


<?php 
    
     }


     /*------------------------End of first case ------------*/
     ?>





<script type="text/javascript">
  
  $(document).ready(function(){
    var a = 400;
    $(".try").click(function(){

        
        if(a == 400){
         $(this).animate({
         

          top: '250px',
          height: '400',
          width: '400',
          opacity: '0.5'
          



          

         
          
       
         });
        
         a = a -1;
       }
       
 else{ $(this).animate({
           
            top: '0px',
            height: '70',
            width: '150',
            backgroundColor: 'black',
            opacity: '1.0'

           

       });

        a = a + 1;
}

    });



  });

</script>



<?php 
 $x = 0;
if(mysqli_num_rows($cat_query) > 0){
  ?>
  <div  class="event-box try ">

          <p>No Events at This Time</p>
        
         </div>

          <div  class="event-box try ">

          <p>No Events at This Time</p>
        
         </div>
          <div  class="event-box try ">

          <p>No Events at This Time</p>
        
         </div>
          <div  class="event-box try ">

          <p>No Events at This Time</p>
        
         </div>
          <div  class="event-box try ">

          <p>No Events at This Time</p>
        
         </div>
         <?php
	do{
 
 	?>

 <a  href="index.php?page=eventdetails&user=user&eventID=<?php echo $cat_rs['ID']; ?>"><div id="11" class="event-box">
       	
         <p>Name: <?php echo $cat_rs['name']; ?></p>
         <p>Type: <?php echo $cat_rs['type']; ?></p>

       </div>
</a>
 
<?php

   $x = $x + 1;
}while($cat_rs=mysqli_fetch_assoc($cat_query));
	

}
 ?>



</div>
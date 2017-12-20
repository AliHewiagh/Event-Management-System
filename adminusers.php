<?php 
include("dbconnection.php");

   $cat_sql="SELECT * FROM user";
   $cat_query=mysqli_query($dbconnect, $cat_sql);
   $cat_rs=mysqli_fetch_assoc($cat_query);

 ?>



<div class="user-list">
	
	<h3 style="margin-bottom: 40px">Users</h3>



<?php 

     if(mysqli_num_rows($cat_query) == 0){
?>
        <div class="users-box">
        <div class="user-name">

          <p>No Users in The System</p>
         </div>
         </div>


<?php 
    
  }  

?>







<?php 
  /*------------------------Start of second case ------------*/
 // elseif(mysqli_num_rows($register_query) > 0){
 if(mysqli_num_rows($cat_query) > 0){
do{
  
 
  ?>



<div class="users-box">
       	<div class="user-name">





       		<p>Name: <?php echo $cat_rs['username']; ?></p>

       	</div>

       	<div class="users-setting">
       		<a href="index.php?page=userinfo&admin=admin&username=<?php echo $cat_rs['username']; ?>"><p>View</p></a>
   
       	</div>
         
         

       </div>

 
<?php

 
}while($cat_rs=mysqli_fetch_assoc($cat_query));
}
 ?>





</div>
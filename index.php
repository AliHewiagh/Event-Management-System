
<?php 
    session_start();


     //echo '<pre>';

     //print_r($_SESSION['admin']['username']);

   // // die();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Event Website</title>
	<link rel="stylesheet" type="text/css" href="event.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
      
 <div class="container">


      <div class="header">
      <?php 
        if (isset($_GET['user'])){
          ?>
      <div class="logo"><a href="index.php?page=hmoe&user=user"><h2>Event Management System</h2></a></div>
       <div class="displayname"><h5>Welcome: <?php  print_r($_SESSION['user']['display_name']); ?></h5></div>
      	<?php
      }

          ?>
<?php

          if (isset($_GET['admin'])){
          ?>
      <div class="logo"><a href="index.php?page=hmoe&admin=admin"><h2>Event Management System</h2></a></div>
       <div class="displayname"><h5>Welcome: <?php  print_r($_SESSION['admin']['adminname']); ?></h5></div>
        <?php
      }

          ?>

      </div>
      <hr>



      <div class="nav">

      <ul>
      	
      	<?php 
        if (isset($_GET['user'])){
      	  ?>
        <a id="logout" href="user_checklogin.php?logout=logout"><li>Logout</li></a> 
        <a id="events" href="index.php?page=events&user=user"><li>Events</li></a> 
        <a id="myevent" href="index.php?page=myevents&user=user"><li>My Events</li></a> 
        <a href="index.php?page=messages&user=user"><li>Messages</li></a> 
     
      <?php
         }
        ?>

        	<?php 
        if (isset($_GET['admin'])){
      	  ?>
        <a href="adminLogin.php?logout=logout"><li>Logout</li></a> 
        <a href="index.php?page=adminevents&admin=admin"><li>Events</li></a> 
        <a id="users" href="index.php?page=adminusers&admin=admin"><li>Users</li></a> 
         
     
      <?php
         }
        ?>
      	
 </ul>

      </div>



      <div class="maincontent">
      	
		    <?php
		     if(!isset($_GET['page'])) {
			include("hmoe.php");
		  } else {
			$page=$_GET['page'];
			include("$page.php");
		}
		    ?>


      </div>
<?php 
   if (isset($_GET['user'])){
 ?>
      <div class="aside">
      	 <div class="contact">

      	 <h3>Contact Us</h3>
      	 <hr>

      	 <form action="user_send_message.php" method="POST">
      	 	 <p><label><input id="subject1" type="text" name="usersubject" placeholder="Subject"></label></p>
      	 	 <p><label><textarea id="textarea" rows="20" cols="30" placeholder="Write your message here..." name="usermessage"></textarea></label></p>

      	 	 <button name="user_sendmessage">Send</button>
      	 	 <input type="reset" value="Reset">



      	 </form>
      	 	

      	 </div>

      </div>












                    <?php 
                    }
                       if (isset($_GET['admin'])) {

                        
                        include("dbconnection.php");
                         /* state 0 for not opend message and sender 1 for users messages */
                       $cat_sql="SELECT * FROM message WHERE state=0 AND sender=1";
                       $cat_query=mysqli_query($dbconnect, $cat_sql);
                       $cat_rs=mysqli_fetch_assoc($cat_query);
                     ?>
                   
                 


 

         <div class="aside">






                       <div class="adminmessages">
                    	     <h3>Messages</h3>
                    	     <hr>



                    	

                           	    

                                  
                                  <?php 

                                       if(mysqli_num_rows($cat_query) == 0){
                                        
                                  ?>
                                          <div class="display-messages">
                                         
                                            <p>No Messages</p>
                                          
                                           </div>


                                          <?php 
                                              
                                            }  

                                          ?>




                                    <?php 

                                       if(mysqli_num_rows($cat_query) > 0){
                                        do{
                                  ?>

                                  <div class="display-messages">
                           		     <p>From : <?php echo $cat_rs['username'] ?></p>
                           		     <p>Subject : <?php echo $cat_rs['subject'] ?></p>
                           		    <div>
                           		  	<a href="index.php?page=adminviewmessage&admin=admin&messageID=<?php echo $cat_rs['messageID']  ?>"><p>View</p></a>
                           		    </div>




                                   	</div>


                          <?php

                                     
                                  }while ($cat_rs=mysqli_fetch_assoc($cat_query));
                                    
                                  }
                           ?>

                    	
                     </div>








           </div>





                    <?php
                      }
                    ?>
                       


















            
      

  </div>

</body>
</html>
<?php 
include("dbconnection.php");



if(isset($_POST['signup'])){


	$username = $_POST['username'];
	$dispalyname = $_POST['dispalyname'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword_error'];
	$phoneNumber = $_POST['phonenumber'];
  $dateofbirth = $_POST['dateofbirth'];
  $address = $_POST['address'];
    

    $register_sql = "SELECT * from user WHERE username='".$_POST['username']."'";
    $register_query=mysqli_query($dbconnect, $register_sql);

   if(mysqli_num_rows($register_query) > 0){

     
        header("Location:user_register.php?error=register");


   }else{


   	 $newcat_sql="INSERT INTO user (username, display_name, password, phone_number, address) VALUES ('".$username."','".$dispalyname."', '".$password."', '".$phoneNumber."', '".$address."')";
         $newcat_query=mysqli_query($dbconnect, $newcat_sql);

        header("Location:user_register.php?right=done");

     }

      
   }



 ?>
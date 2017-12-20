<?php


include("dbconnection.php");
	session_start();
	if(isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_destroy();
		header("Location:user_register.php");
	}


if(isset($_POST['login']))
{

$login_sql="SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
$login_query=mysqli_query($dbconnect, $login_sql);

if(mysqli_num_rows($login_query) > 0){

    $login_rs=mysqli_fetch_assoc($login_query);
    $_SESSION['user'] = $login_rs;
    
    
   
    

    header("Location:index.php?user=user");
       
    
    

}else{


	header("Location:user_register.php?loginError=loginError");
}


}

?>






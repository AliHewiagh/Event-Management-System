<?php


include("dbconnection.php");
	session_start();
	if(isset($_GET['logout'])) {
		unset($_SESSION['admin']);
		session_destroy();
		header("Location:admin_login.php");
	}


if(isset($_POST['login']))
{

$login_sql="SELECT * FROM admin WHERE adminname='".$_POST['username']."' AND password='".$_POST['password']."'";
$login_query=mysqli_query($dbconnect, $login_sql);

if(mysqli_num_rows($login_query) > 0){                                                                                                                                                                                                                                                                                                       

    $login_rs=mysqli_fetch_assoc($login_query);
    $_SESSION['admin'] = $login_rs;
    
    
   
    

    header("Location:index.php?admin=admin");
       
    
    

}else{


	header("Location:admin_login.php?loginError=loginError");
}


}

?>






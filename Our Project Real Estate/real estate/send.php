<?php  



if (isset($_POST['message']) && isset($_GET['u_email'])) {
	include 'db.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
  
session_start();  
  
if(!$_SESSION['admin_name'])  
{  
  
    header("Location: admin_login.php");//redirect to the login page to secure the welcome page without login access.  
}
$u_email=validate($_GET['u_email']);  
$name=validate($_SESSION['admin_name']);
$message = validate($_POST['message']);
	

if (empty($message) || empty($name)) {
	header("Location:entrybuyer.php");
}else {

	$sql = "INSERT INTO test(name, message,u_email) VALUES('$name', '$message','$u_email')";
	$res = mysqli_query($con, $sql);

	if ($res) {
		echo "Your message was sent successfully!";
	}else {
		echo "Your message could not be sent!";
	}
}


}else {
	header("Location: entrybuyer.php");
}
?>
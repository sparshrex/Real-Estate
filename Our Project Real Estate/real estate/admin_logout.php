<?php  
  
$dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"users");  
?>  
<?php  

session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
header("Location: admin_login.php");//use for the redirection to some page  
?>  
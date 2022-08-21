
<?php
include('db.php');

?>
<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
?> 
 
 <!DOCTYPE html>
<html>
<head>
	<title>Seller details</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="message.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> 
	<h2><span>Buyer's Request For Purchasing</span></h2>
	<div class="add-table">
<table class="table table-bordered table-striped table-hover" id="myTable">
		<thead>
			<tr>
			   
				<th class="text-center " scope="col">Buyer's Name</th>
				<th class="text-center " scope="col">Message</th>
				
			
			</tr>
		</thead>
<?php
            $room=$_SESSION['email'];
        	$get_data = "SELECT * FROM `test` where u_email='$room'";
        	$run = mysqli_query($con,$get_data);
			$i = 0;
        	while($row = mysqli_fetch_array($run))
        	{
				$sl = ++$i;
				
				$u_card = $row['message'];
				$u_f_name = $row['name'];

        		echo "

			<tr>
			
				<td class='text-left'> $u_f_name</td>
				<td class='text-left'>$u_card</td>
			</tr>


        		";
        	}

        	?>
        </table>
		</div>
		</body>
</html>
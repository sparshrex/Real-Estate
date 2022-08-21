<?php  
session_start();//session starts here  
  
?>  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Buyer Login</title>  
</head>  
<style>    
    .login-panel {  
        margin-top: 150px;  
    }
    body{
    background-image: url(myimg/landing3.jpg) ;
    background-repeat: no-repeat;
    background-size: cover;
    
    
}
    input{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 30px 37px;
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.container{
    max-width: 80%; 
    padding: 34px; 
    margin: auto;
}
.container h1 {
    text-align: center;
    font-family: 'Sriracha', cursive;
    font-size: 40px;
}
.field{
    display: inline-block;
    background-color: rgb(0 0 0 / 37%);
    height: 17rem;
    font-size: larger;
    opacity: 0.7;
    font-weight: bold;
    margin-left: 60;
    width: 27%;
    border-radius: 100px;
    border: inherit;

}

.btn{
     
    position: relative;
    left: -78px;
    color: white;
    background: black;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}
  </style> 
  
<body>  
  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h1 class="panel-title"> Buyer/Tenant's Sign In</h1>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="admin_login.php">  
                        <fieldset class="field ">  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">  
                            </div>  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login"  style="    width: 140px;
    margin-left: 223px;" >  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
  
</html>  
  
<?php  
 
include("database/db_conection.php");  
  
if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('entrybuyer.php','_self')</script>";  
        $_SESSION['admin_name']=$admin_name;
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>  
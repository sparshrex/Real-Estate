<?php  
session_start();//session starts here  
  
?>  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> 
  
    <title>Seller Login</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }
    body{
    background-image: url(myimg/lading.jpg) ;
    background-repeat: no-repeat;
    background-size: cover;
    
}
    input{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 30px 58px;
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
    background-color: rgb(149 109 0 / 37%);
    height: 17rem;
    font-size: larger;
    opacity: 0.7;
    font-weight: bold;
    margin-left: 60;
    width: 50%;
    border-radius: 100px;
    border: inherit;

}

.btn{
    color: white;
    background: purple;
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
                    <h1 class="panel-title"> Sellers's Sign In</h1>  
                </div>  
                <div class="panel-body panelstyle">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset class="field">  
                            <div class="form-group"  >  
                                <input class="form-control form-field" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control form-field" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                                <input class="btn btn-lg btn-success btn-block button-class" type="submit" value="login" name="login"  style="    width: 140px;
    margin-left: 223px;">  
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
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
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('sellerdetails.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  
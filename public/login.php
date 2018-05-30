<?php
use classes\business\UserManager;

require_once 'includes/autoload.php';

$formerror="";

$email="";
$password="";
if(isset($_REQUEST["submitted"])){
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];

    $UM=new UserManager();

    $existuser=$UM->getUserByEmailPassword($email,$password);
    if(isset($existuser)){
        session_start();
        $_SESSION['email']=$email;
		$_SESSION['id']=$existuser->UserId;
        header("Location:home.php");
    }else{
        $formerror="Invalid User Name or Password";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../m3/bs/css/bootstrap.min.css">
  <script src="../M5project/bs/js/jquery.min.js"></script>
  <script src="../M5project/bs/js/bootstrap.min.js"></script>
  
  <style>
body{
background-image:url("/M5project/images/1.jpg")
}
#form{
         background-color: #00b8e6;  
         min-height: 400px ;
         font-color : white ;
     }
.registration{
           font-size: 50px ;
           font-family:agency FB;
           font-weight: 700 ;
           border-bottom-style: ridge;;

     }
.text{
       height: 30px;
     }
label {
         font-size :12px ;
         color : white;
     }

h1{
font-size :150%;

color:white;
text-align: center;

}

</style>
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/M5project/public/home.php">ABC Jobs</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/M5project/public/home.php">Home</a></li>
      <li><a href="#">Admin</a></li>
      <li><a href="#">Support</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
	 <ul class="nav navbar-nav navbar-right">
      <li><a href="/M5project/public/modules/user/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/M5project/public/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  </div>
</nav>
  
<div class="container" style="margin-top:50px">
   <div class = "container-fluid"  >
       
  	  
                 
         <div class = "row" >
	       <div class = "col-sm-3" >
	       </div>
	       <div class = "col-sm-1" id="form"></div>
               <div class = "col-sm-4" id= "form">  
            	 <h1 centre> Log In to access your account</center></h1>
                 
	
                <form name="myForm" method="post"> 
                   
    			<div class = "form-group" >
                           <label> Email   </label>
			    <class="input-group">
			       <input type "email"  name="email" value="<?=$email?>" class ="form-control"
                            placeholder="Enter your Email" id="email">
                        </div>
                
			<div class = "form-group" >
                           <label> Password   </label>
			    <class="input-group">
			       <input type "password"  name="password" value="<?=$password?>" class ="form-control"
                            placeholder="Enter Password" id="password">
                        </div>
                   


                                    
<input type="hidden" name="submitted" value="1">
<input type="hidden" name="submitted" value="1"><input type="submit" name="submit" value="Login">
       <input type="submit" name="clear" value="Clear" onclick="javascript:clearForm();">	  


<div class="form-group">
<div class="checkbox">
  <label>
    <input id="inputAddList"
      type="checkbox">Remember me
  </label>  
  
 
</div>

</div>

                
                  </form>    
<a href="/M5project/public/modules/user/PForgot.php">Forgot password</a>
                 </div>
	       <div class="col-sm-1" id="form"></div>
         </div>

    </div>
<a href="#"><center>ABC Jobs Privacy & Policy 2017</center></a>
</body>
</html>

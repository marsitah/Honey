<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Confirmation Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../m3/bs/css/bootstrap.min.css">
  <script src="../m3/bs/js/jquery.min.js"></script>
  <script src="../m3/bs/js/bootstrap.min.js"></script>
  
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
			   
            	 <h1 centre> Thank You</center></h1>
				 <h1 centre> You have successfully registered to community portal</center></h1>
				 <h1><center>Continue with <a href="/M5project/public/login.php">login</a></center></h1>

                 
	
              
                 </div>
	       <div class="col-sm-1" id="form"></div>
         </div>

    </div>
<a href="#"><center>ABC Jobs Privacy & Policy 2017</center></a>
</body>
</html>

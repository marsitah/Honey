<?php
use classes\business\UserManager;

$formError="";

require_once ($_SERVER['DOCUMENT_ROOT'].'/phpmailer/class.phpmailer.php');

require_once ($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php');

if(isset($_REQUEST["submitted"])){
	$mail = new PHPMailer;
	//Enable SMTP debugging.
	$mail->SMTPDebug = 3;
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();
	//Set SMTP host name
	$mail->Host = "in-v3.mailjet.com";
	//Set this to true if SMTP host requires authentication
	$mail->SMTPAuth = true;
	//Provide username and password
	$mail->Username = "39c349b41a521bde219cbf39526c7e04";
	$mail->Password = "cdd492199217e88aafccdff18c9e8a95";
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "tls";
	//Set TCP port to connect to
	//$mail->Port = 587;
	$mail->Port = 25;
	$mail->From = "marsitah@gmail.com";
	$mail->FromName = "ABC JOBS";
	$mail->addAddress("marsitah@gmail.com", "Marsitah");
	$mail->isHTML(true);
	$mail->Subject = "Subject Text";
	$mail->Body = "<i>Mail body in HTML</i>";
	$mail->AltBody = "This is the plain text version of the email content";
	if(!$mail->send())
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
		echo "Message has been sent successfully";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/M5project/bs/css/bootstrap.min.css">
  <script src="/M5project/bs/js/jquery.min.js"></script>
  <script src="/M5project/bs/js/bootstrap.min.js"></script>
  
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
      <a class="navbar-brand" href="/M5project/public/home.php"color="red">ABC Jobs</a>
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
            	 <h1 centre> Forgot Password</center></h1>
                 <h1 centre> Enter your email to receive validation code</center></h1>
	
                <form action="/M5project/public/modules/user/forgotthankyou.php" method="get"> 
                   
    			<div class = "form-group" >
                           <label> Email   </label>
			    <class="input-group">
			       <input type "email"  name="email" class ="form-control"
                            placeholder="Enter your Email" id="email">
                        </div>
   

                                    

  <input type="hidden" name="submitted" value="1"> <input type="submit" name="submit" value="Email validation code">	
 
 



                
                  </form>    

                 </div>
	       <div class="col-sm-1" id="form"></div>
         </div>

    </div>
<a href="#"><center>ABC Jobs Privacy & Policy 2017</center></a>
</body>
</html>

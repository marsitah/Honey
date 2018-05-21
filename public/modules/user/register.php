<?php
require_once '../../includes/autoload.php';

use classes\util\DBUtil;
use classes\business\UserManager;
use classes\entity\User;

$formerror="";

$firstName="";
$lastName="";
$email="";
$contact="";
$blockUser="";
$password="";
$createdBy="";
$updatedBy="";
$createdOn="";
$updatedOn="";


if(isset($_REQUEST["submitted"])){
    $firstName=$_REQUEST["firstName"];
    $lastName=$_REQUEST["lastName"];
    $email=$_REQUEST["email"];
	$contact=$_REQUEST["contact"];
	$blockUser="No";
    $password=$_REQUEST["password"];
	$createdBy=$firstName;
	$updatedBy=$firstName;
	
		
    if($firstName!='' && $lastName!='' && $email!='' && $password!=''){
        $UM=new UserManager();
        $user=new User();
        $user->firstName=$firstName;
        $user->lastName=$lastName;
        $user->email=$email;
		$user->contact=$contact;
        $user->password=$password;
		$user->blockUser=$blockUser;
		$user->createdBy=$createdBy;
        $user->createdOn =$createdOn;
        $user->updatedBy=$updatedBy;
        $user->updatedOn =$updatedOn;
        
        $existuser=$UM->getUserByEmail($email);
    
        if(!isset($existuser)){
            // Save the Data to Database
            $UM->saveUser($user);
            header("Location:registerthankyou.php");
        }
        else{
            $formerror="User Already Exist";
        }
    }else{
        $formerror="Please fill in the fields";
    }
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="M5project/bs/css/bootstrap.min.css">
  <script src="/M5project/bs/js/jquery.min.js"></script>
  <script src="/M5project/bs/js/bootstrap.min.js"></script>
  
  <style>
body{
background-image:url("/M5project/images/1.jpg")
}

#form{
         background-color: #00b8e6;  
         min-height: 650px ;
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
            	 <h1><centre>Registration</center></h1>
                 
				 
<form name="myForm" method="post">
<div><?=$formerror?></div>
<div class = "form-group" >
                        <label> First Name   </label>
			 <class="input-group">
			   <input type "text"  name="firstName" value="<?=$firstName?>" class ="form-control"
                           placeholder="Enter your First Name">
                     </div>
		     <div class = "form-group" >
                         <label> Last Name   </label>
			 <class="input-group">
			   <input type "text"  name="lastName" value="<?=$lastName?>" class ="form-control"
                           placeholder="Enter your Last Name">
                     </div>


    			<div class = "form-group" >
                           <label> Email   </label>
			    <class="input-group">
			       <input type "email"  name="email" value="<?=$email?>" class ="form-control"
                            placeholder="Enter your email address" id="email">
                        </div>
						
				<div class = "form-group" >
                           <label> Contact   </label>
			    <class="input-group">
			       <input type "contact"  name="contact" value="<?=$contact?>" class ="form-control"
                            placeholder="Enter your Contact Number" id="contact">
                        </div>
                
			<div class = "form-group">
                           <label> Password   </label>
			    <class="input-group">
			                         
			    <input type="password" class="form-control" placeholder="Enter Password"  name="password" value="<?=$password?>"> 
                 	
			   </div>
			   
			 <div class = "form-group">
                           <label> Confirm Password   </label>
			    <class="input-group">
			                         
			    <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" value="<?=$password?>"> 
                 	
			   </div>

       <input type="hidden" name="submitted" value="1"><input type="submit" name="submit" value="Submit">
       <input type="submit" name="clear" value="Clear" onclick="javascript:clearForm();">
    </td>
  </tr>
</table>
</form>
</html>
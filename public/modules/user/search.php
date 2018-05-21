<?php
require_once '../../includes/autoload.php';

use classes\business\UserManager;
use classes\entity\User;

ob_start();
include '../../includes/security.php';
include '../../includes/header.php';
?>

<?php


$formerror="";

ob_start();


$email="";
$firstName ="" ;
$lastName = "";
$users=[];

if(isset($_POST["submitted"])){
        $valid = true;
    
        $firstName=$_REQUEST["firstName"];
        $lastName=$_REQUEST["lastName"];
        $email=$_REQUEST["email"];
		
		$UM=new UserManager();
		$users=$UM->getUsers($email, $firstName, $lastName);
      
}

?>
<style>
body{
background-image:url("/M5project/images/2.jpg")
}
</style>
<form name="myForm" method="post">
<h1>Search User</h1>
<div><?=$formerror?></div>
<table border='1' width="800">
  <tr>
    <td>First Name</td>
    <td><input type="text" name="firstName" value="<?=$firstName?>" size="50"></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type="text" name="lastName" value="<?=$lastName?>" size="50"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" value="<?=$email?>" size="50"></td>
  </tr>
  <tr>
    <td colspan="2" align="right">
       <input type="hidden" name="submitted" value="1"><input type="submit" name="submit" value="Submit">
       <input type="submit" name="clear" value="Clear Search" onclick="javascript:clearForm();">
    </td>
  </tr>
</table>
<br/><br/>Search Result <br/><br/>
    <table width="800" border="1">
            <tr>
               <td><b>User Id</b></td>
               <td><b>First Name</b></td>
               <td><b>Last Name</b></td>
               <td><b>Email</b></td>
            </tr>  
	<?php
		if(isset($users)){

			foreach ($users as $user) {
				if($user!=null){
	?>
					<tr>
					   <td><?=$user->UserId?></td>
					   <td><?=$user->firstName?></td>
					   <td><?=$user->lastName?></td>
					   <td><?=$user->email?></td>
					</tr>
	<?php
				}

			}
		}
    ?>
    </table><br/><br/>
</form>

<?php
include '../../includes/footer.php';
?>
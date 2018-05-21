<?php
require_once '../../includes/autoload.php';

use classes\business\UserManager;
use classes\entity\User;

ob_start();
include '../../includes/security.php';
include '../../includes/header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">


.tablewrap {
      
    margin: 20px; 
    padding: 20px;
    border: solid 5px;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
   
    padding: 15px;
}


input[type=text] {
    width:60%;
    padding: 12px 20px;
    margin:  10px 0 ;
}
label {
         font-size :14px ;
         color : solid black;
         text-align: right;
         width: 140px;
      
}
     



</style>

}

</style>
</head>
<body>
<div class="menu">

</div>
<div
        style="margin-right: 50px; margin-left: 50px; border: solid 5px; background: grey;">

              
              <br>
             <td>
              
              <button style="width:150px;font-size:13pt; border:3px solid blue ;float: right" " onclick="home.php">Send bulk email</button>
                </td>

              <br>
               <br>
        
     </div>   
     </body>
   


            <form method="post" action="home.php">
                <div style="margin-right: 50px; margin-left: 50px;
                       border: solid 5px;
                       background: grey;">
                    <label> To : </label> 
                     <input name="email" type="text"   />
                    <br>
                    <label>Subject: </label>
                    <input name="subject" type="text" />
                    <br>
                    <label>Message:</label>
                    <input name="comment" type="textarea"rows="5" cols="80" >
                    
              </div> 
             </form>
  <script>

        function deleteRow(btn) {
          var row = btn.parentNode.parentNode;
          row.parentNode.removeChild(row);
        }


       
    </script>
<?php 
$UM=new UserManager();
$users=$UM->getAllUsers();

if(isset($users)){
    ?>
   
    <table width="800" border="1">
            <tr>
               <td><b>User Id</b></td>
               <td><b>First Name</b></td>
               <td><b>Last Name</b></td>
               <td><b>Email</b></td>
            </tr>    
    <?php 
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
    ?>
    </table><br/><br/>
    <?php 
}
?>

 </html>           
   
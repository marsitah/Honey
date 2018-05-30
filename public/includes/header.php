
<?php 
   if(isset($_SESSION["email"])){
       ?>
       <a href="/M5project/public/home.php">Home</a> &nbsp;
       <a href="/M5project/public/modules/user/updateprofile.php">Update Profile</a> &nbsp;
	   <a href="/M5project/public/modules/user/search.php">Search Users</a> &nbsp;
       <a href="/M5project/public/modules/user/userlist.php">View Users</a> &nbsp; 
	   <a href="/M5project/public/modules/user/bulkemail.php">Bulk Email</a> &nbsp; 
       <a href="/M5project/public/logout.php">Logout</a> &nbsp; 
       <?php 
   }
?>


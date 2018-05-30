<?php
namespace classes\data;

use classes\entity\User;
use classes\util\DBUtil;

class UserManagerDB
{
    public static function fillUser($row){
        $user=new User();
        $user->UserId=$row["UserID"];
        $user->firstName=$row["firstName"];
        $user->lastName=$row["lastName"];
        $user->email=$row["Email"];
        $user->Contact=$row["Contact"];
        $user->blockUser=$row["block_user"];
        $user->userType=$row["user_type"];
        $user->userStatus=$row["user_status"];
		$user->password=$row["password"];
		$user->createdBy=$row["createdBy"];
		$user->updatedBy=$row["updatedBy"];
		$user->createdOn=$row["createdOn"];
		$user->updatedOn=$row["updatedOn"];
	
        return $user;
    }   
    public static function getUserByEmailPassword($email,$password){
        $user=NULL;
        $conn=DBUtil::getConnection();
        $email=mysqli_real_escape_string($conn,$email);
        $password=mysqli_real_escape_string($conn,$password);
        $sql="select * from cp_tb_user where email='$email' and password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()){
                $user=self::fillUser($row);
            }
        }
        $conn->close();
        return $user;
    }
    public static function getUserByEmail($email){
        $user=NULL;
        $conn=DBUtil::getConnection();
        $email=mysqli_real_escape_string($conn,$email);
        $sql="select * from cp_tb_user where email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()){
                $user=self::fillUser($row);
            }
        }
        $conn->close();
        return $user;
    }
    public static function saveUser(User $user){
        $conn=DBUtil::getConnection();
        $sql="call procSaveUser(?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issssssssss", $user->UserId, $user->firstName, $user->lastName, $user->email, $user->contact,
				 $user->blockUser, $user->userType, $user->userStatus, $user->password, $user->createdBy,
				$user->updatedBy);
		
	
     
        $stmt->execute();
        if($stmt->errno!=0){
            printf("Error: %s.\n",$stmt->error);
        }
        $stmt->close();
        $conn->close();
    }
    public static function getAllUsers(){
        $users[]=array();
        $conn=DBUtil::getConnection();
        $sql="select * from cp_tb_user";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $user=self::fillUser($row);
                $users[]=$user;
            }
        }
        $conn->close();
        return $users;
    }
    public static function getUsers($email, $firstName, $lastName){
        $users[]=array();	
        $conn=DBUtil::getConnection();
		$email=mysqli_real_escape_string($conn,$email);
		$firstName=mysqli_real_escape_string($conn,$firstName);
		$lastName=mysqli_real_escape_string($conn,$lastName);
        $sql="select * from cp_tb_user where email='$email' or firstName='$firstName' or lastName='$lastName'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $user=self::fillUser($row);
                $users[]=$user;
            }
        }
        $conn->close();
        return $users;
    }
}

?>
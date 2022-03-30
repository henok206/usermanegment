<?php
  session_start();
include("database.php");
 $userId=$_POST['userId'];
 $firstName=$_POST['firstName'];
 $lastName=$_POST['lastName'];
 $email=$_POST['email'];
 $uname=$_POST['uname'];
 $pass=$_POST['pass'];
 $status=$_POST['status'];
 
 //echo "FirstName: $firstName <br>";
 //echo "LastName: $lastName <br>";
 $sql= "UPDATE `user_tbl` SET `first name`=?,`last name`=?,`email`=?,`username`=?,`password`=?,`status`=? WHERE id=?";
 $stmt=$conn->prepare($sql);
 echo $stmt->rowCount();
 $stmt->execute([$firstName,$lastName,$email,$uname,$pass,$status,$userId]);

//  $sql="UPDATE user_tbl SET first name=:firstName, lastname=:lastName, email=:email, username=:uname, password=:pass, status=:status WHERE id=:userId";
//  $stmt=$conn->prepare($sql);
//  $stmt->bindParam(':firstName',$firstName);
//  $stmt->bindParam(':lastName',$lastName);
//  $stmt->bindParam(':email',$email);
//  $stmt->bindParam(':uname',$uname,);
//  $stmt->bindParam(':pass',$pass);
//  $stmt->bindParam(':status',$status);
//  $stmt->bindParam(':id',$userId);
//  $stmt->execute();

 if($stmt->rowCount()==1){
   $message="user profile have been updated!";
   $opeStatus=0;
 }
 else{
    $message="Error,try again";
     $opeStatus=1;
 }
 $_SESSION['message']=$message;
 $_SESSION['opeStatus']=$opeStatus;
 header("location:home.php");

?>

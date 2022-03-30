<?php
  session_start();
 include("database.php");
 $firstName=$_POST['firstName'];
 $lastName=$_POST['lastName'];
 $email=$_POST['email'];
 $uname=$_POST['uname'];
 $pass=$_POST['pass'];
 $status=1;
 
 echo "FirstName: $firstName <br>";
 echo "LastName: $lastName <br>";
 $sql="INSERT INTO `user_tbl`(`first name`, `last name`, `email`, `username`, `password`, `status`) VALUES (?,?,?,?,?,?)";
 $stmt=$conn->prepare($sql);
 $stmt->execute([$firstName,$lastName,$email,$uname,$pass,$status]);
// $sql="INSERT INTO user_tbl (firstName,lastName,email,username,password,status) VALUES(:firstName,:lastName,:email,:username,:password,:status)";
//  $stmt=$conn->prepare($sql);
//  $stmt->bindParam(':firstName', $firstName);
//  $stmt->bindParam(':lastName', $lastName);
//  $stmt->bindParam(':email', $email);
//  $stmt->bindParam(':username', $username);
//  $stmt->bindParam(':password', $password);
//  $stmt->bindParam(':status', $status);
//  $stmt->execute();
 
 if($stmt->rowCount()==1){
   $message="New user has been registerd!";
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
<?php 
session_start();
include("heder/heder.php");
include("database.php");

echo "login";
//collect information from clint side
$uname=$_POST["username"];
$pass=$_POST["password"];
//echo "username: $uname <br>";
//echo "password: $pass";
$sql="SELECT * FROM `user_tbl` WHERE `username`=? and `password`=?";
$stmt=$conn->prepare($sql);
$stmt->execute([$uname,$pass]);  //binding and excute 
if($stmt->rowCount()==1){
    $_SESSION['username']=$uname; //crete assesion
    header("location:home.php");
}

else
{
    echo "error,invalid username and password";
    header("location:index.php");
}
?>
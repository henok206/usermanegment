<?php
 session_start();
 //include("template/heder.php");
 if(!isset($_SESSION['username'])){
    header("location:index.php");
}
    include("database.php");
    $userId=$_GET['id'];
    echo"userid:$userId";
    // $sql="DELETE FROM `user_tbl` WHERE 'id' = ?";
    // $stmt=$conn->prepare($sql);
    // $stmt->execute(['$userId']);
    $message="";

    $sql = "DELETE FROM user_tbl WHERE id = :userId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':userId', $userId);
    $stmt->execute();
        
    if($stmt->rowCount()==1){
      
        $message ="<h3>The user has been deleted</h3>";
        $opeStatus=0;
        
    }
    else{
           $message ="Error try again";
           $opeStatus=1;
    }
    $_SESSION['message']=$message;
    $_SESSION['opeStatus']=$opeStatus;
    header("location:home.php");
?>

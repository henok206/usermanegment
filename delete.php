<?php
 session_start();
 include("heder/heder.php");
 if(!isset($_SESSION['username'])){
    header("location:index.php");
}
    include("database.php");
    $userId=$_GET['id'];
    echo"user id:$userId";
    // $sql="DELETE FROM `user_tbl` WHERE 'id' = ?";
    // $stmt=$conn->prepare($sql);
    // $stmt->execute([$userId]);
    $message="";

    $sql = "DELETE FROM user_tbl WHERE id = :userId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':userId', $userId);
    $stmt->execute();
        
    if($stmt->rowCount()==1){
      
        $message ="The user has been deleted";
        
    }
    else{
           $message ="error try again, there is something wrong";
    }
    $_SESSION['message']=$message;
    header("location:home.php");
?>

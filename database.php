<?php
//database connection
$servername="localhost";
$username="root";
$password="";
$dbname="user";

try{
    
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //echo "connected!!<br>";
}
catch (PDOException $e){
 echo $e->getMessage();
 echo "invalid user";
}

?>
<?php
session_start();
include("heder/heder.php");

if(!isset($_SESSION['username'])){
    header("location:index.php");
}
//echo "<h2>welcome to home page</h2>";
 //echo $_SESSION['username']; //to checke valid user
 //unset($_SESSION['username']);
 include("database.php");
?>
<?php
     
     if(isset($_SESSION['message'])){
        echo " <div class='alert alert-success' role='alert'>";
        echo $_SESSION['message'];
        echo "</div>";
        
        }
        if(isset($_SESSION['message']))
        unset($_SESSION['message']);
        
    
?>
<div id="tablecontent">
        <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">#id</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">email</th>
            <th scope="col">username</th>
            <th scope="col">status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
             $count=1;
             $sql= "SELECT * FROM `user_tbl` WHERE 1";
             $stmt=$conn->prepare($sql);
             $stmt->execute();
             //echo $stmt->rowCount();
             while($row=$stmt->fetch(PDO::FETCH_NUM)){
                 $id=$row[0];
                 $firstName=$row[1];
                 $lastName=$row[2];
                 $email=$row[3];
                 $username=$row[4];
                 $status=$row[6];
                 
                 echo "<tr>";
                 echo "<th scope='row'>$count</th>"; 
                 echo "<td>$firstName</td>" ;
                 echo "<td>$lastName</td>";
                 echo "<td>$email</td>";
                 echo  "<td>$username</td>";
                 if($status==1){
                     echo  "<td><span class='badge bg-success'>Active</span></td>";
                 }
                 else{
                     echo "<td><span class='badge bg-danger'>In Active</span> </td>";
                 }
                 echo "<td>";
                      echo "<button type='button' class='btn btn-warning'>update</button>";
                      echo "<button type='button' class='btn btn-info'>view</button>";
                      echo "<a href='delete.php?id=$id'><button type='button' class='btn btn-danger'>Delete</button></a>";
                  
                 echo "</td>";
                 echo "</tr>";
                 $count++;
             }

            ?>
          
            
           
        </tbody>
        </table>
</div>
include("heder/heder.php");
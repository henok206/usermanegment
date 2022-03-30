<?php
session_start();
include("template/heder.php");

if(!isset($_SESSION['username'])){
    header("location:index.php");
}
 //unset($_SESSION['username']);
 include("database.php");
  $userId=$_GET['id'];
?>


<div id="tablecontent">
        <div class="card">
          <div class="card-header">
            Display User Profile
          </div>
        <div class="card-body">
           <?php
              $sql="SELECT * FROM `user_tbl` WHERE id=?";
              $stmt=$conn->prepare($sql);
              $stmt->execute([$userId]);
            // echo $stmt->rowCount();
              $data=$stmt->fetch(PDO::FETCH_NUM);
              //echo $data[1];
              $id=$data[0];
              $firstName=$data[1];
              $lastName=$data[2];
              $email=$data[3];
              $username=$data[4];
              $password=$data[5];
              $status=$data[6];
            ?>
          <form >
                <input type="hidden" class="form-control" id="userId" 
                name="userId" value='<?php  echo $userId ?>'>
                <div class="mb-3">
                  <label for="First name" class="form-label">Firstname</label>
                  <input type="text" class="form-control" id="firstName"  name="firstName" disabled  value='<?php echo $firstName ?>'>
                </div>
              <div class="mb-3">
                  <label for="Last name" class="form-label">Lastname</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" disabled  value='<?php echo $lastName ?>'>
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" disabled value='<?php echo $email ?>'>
              </div>
              <div class="mb-3">
                  <label for="username" class="form-label">username</label>
                  <input type="text" class="form-control" id="uname" name="uname" disabled value='<?php echo $username ?>' >
              </div>
             <div class="mb-3">
                <label for="status" class="form-label">status</label>
               
                     <?php 
                        if($status==1){
                           echo "<span class='badge bg-success'>Active</span>";
                           
                        }
                        else{
                           
                           echo "<span class='badge bg-danger'>Active</span>";
                        }
                     ?>
                  
               </div>     
       </form>  
    </div>
   </div>

  
</div>

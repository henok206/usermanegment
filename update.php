
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
            Update user Profile
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
          <form action="updateOperation.php" method="post">
                <input type="hidden" class="form-control" id="userId" 
                name="userId" value='<?php  echo $userId ?>'>
                <div class="mb-3">
                  <label for="First name" class="form-label">Firstname</label>
                  <input type="text" class="form-control" id="firstName"  name="firstName" value='<?php echo $firstName ?>'>
                </div>
              <div class="mb-3">
                  <label for="Last name" class="form-label">Lastname</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" value='<?php echo $lastName ?>'>
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value='<?php echo $email ?>'>
              </div>
              <div class="mb-3">
                  <label for="username" class="form-label">username</label>
                  <input type="text" class="form-control" id="uname" name="uname" value='<?php echo $username ?>' >
              </div>
              <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="pass" name="pass" value='<?php echo $password ?>'>
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">status</label>
               <select class="form-select" aria-label="Default select example" id="status" name="status">
                     <?php 
                        if($status==1){
                           echo "<option selected value=1>Active</option>";
                           echo "<option value=0 >In Active</option>";
                        }
                        else{
                           echo "<option value=1>Active</option>";
                           echo "<option selected value=0>In Active</option>";
                        }
                     ?>
                  </select>
              </div>
              
                           
              <button type="submit" class="btn btn-primary">Update</button>
       </form>  
    </div>
   </div>

  
</div>

<?php
session_start();
include("template/heder.php");

if(!isset($_SESSION['username'])){
    header("location:index.php");
}
 //unset($_SESSION['username']);
 include("database.php");
?>


<div id="tablecontent">
        <div class="card">
          <div class="card-header">
            Register new user
          </div>
        <div class="card-body">
          <form action="insertOperation.php" method="post">
                <div class="mb-3">
                  <label for="First name" class="form-label">Firstname</label>
                  <input type="text" class="form-control" id="firstName"  name="firstName">
                </div>
              <div class="mb-3">
                  <label for="Last name" class="form-label">Lastname</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" >
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" >
              </div>
              <div class="mb-3">
                  <label for="username" class="form-label">username</label>
                  <input type="text" class="form-control" id="uname" name="uname" >
              </div>
              <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="pass" name="pass">
              </div>
              
              <button type="submit" class="btn btn-primary">Register</button>
       </form>  
    </div>
   </div>

  
</div>

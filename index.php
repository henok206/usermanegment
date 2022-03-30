

<!DOCTYPE html>
<html lang="en">

  <?php  include('template/heder.php');?>
  <div id="logincomponet">
   <form action="login.php" method="POST">
     <div class="mb-3">
       <label for="username" class="form-label">Username</label>
       <input type="text" class="form-control" id="username" name="username">
       <!-- <div id="emailHelp" class="form-text">We'll never share your username with anyone else.</div> -->
     </div>
     <div class="mb-3">
       <label for="password" class="form-label">Password</label>
       <input type="password" class="form-control" id="password" name="password">
     </div>
     <button type="submit" class="btn btn-primary">Login</button>
   </form>
 </div>
  //<?php  include("template/footer.php");?>
  </body>
 </html>
<!-- start login componet -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/bootstrap.bundle.min.js"></script>
 <style>
            #logincomponet{
              border:0px solid red;
                width:400px;
                padding:10px;
                margin: 20px auto;
            }
           #tablecontent{
                border:0px solid red;
                width:900px;
                padding:10px;
                margin: 10px auto;
              }
           button{
             margin-left: 5px;
           }
           </style>
</head>
<body>
  <?php  include("heder/heder.php");?>
  <div id="logincomponet">
    <form action="login.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
        <!-- <div id="emailHelp" class="form-text">We'll never share your username with anyone else.</div> -->
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
        <!-- end of login componet -->
        <?php  include("heder/footer.php");?>
</body>
</html>
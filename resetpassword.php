<?php require "C:/xampp/htdocs/loginpage/config/config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>RESET YOUR PASSWORD</h2>
  <form action="" method="POST">
    <!-- <div class="form-group">
      <label for="pwd">Username</label>
      <input type="text" class="form-control" id="pwd" placeholder="enter username" name="username">
    </div>   -->
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter New password" name="password">
    </div>

    <button name="reset" type="submit" class="btn btn-default">Reset Password</button>
  </form>
  <?php
    $username=$_GET['us'];//getting from URL
    if(isset($_POST['reset'])){
        $password=$_POST['password'];
        $query="UPDATE `signup` SET `password`='$password' WHERE `username`='$username'";
        $fire=mysqli_query($con,$query);
        $query1="UPDATE `logininfo` SET `password`='$password' WHERE `username`='$username'";
        $fire1=mysqli_query($con,$query1);
        if($fire1 and $fire)
        {
            header("Location:index.php");
        }
    }
  ?>
</div>

</body>
</html>

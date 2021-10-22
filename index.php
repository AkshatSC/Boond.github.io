<?php require "C:/xampp/htdocs/loginpage/config/config.php";?>
<?php
    // if(isset($_POST['submit'])){
    //     $username=$_POST['username'];
    //     $password=md5($_POST['password']);
    //     // $query="INSERT INTO `logininfo` (`username`, `password`) VALUES ('$username', '$password')";
    //     // $fire=mysqli_query($con,$query);
    //     // if($fire)
    //     //     echo "success";
    //     $query="SELECT * FROM `logininfo` WHERE `username`='$username'";
    //     $fire=mysqli_query($con,$query);
    //     // if($fire)
    //     //     echo "success";

    //     // if(mysqli_num_rows($fire)==0)
    //     // {
           
    //     // }
    //     // else if(mysqli_num_rows($fire)!=0)
    //     // {
    //     //     $query="INSERT INTO `logininfo` (`username`, `password`) VALUES ('$username', '$password')";
    //     //     $fire=mysqli_query($con,$query);
    //     // }

    // }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="POST"> <!--method is imp to give -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="username" type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password" type="password" class="form-control" placeholder="password">
					</div>
					
					<div class="form-group">
						<input name="submit" type="submit" value="Login" class="btn btn-primary btn-sm">
					</div>
                    <?php
                            // isset function return boolean if variable or button is set
                            if(isset($_POST['submit'])){
                                $username=$_POST['username'];
                                $password=($_POST['password']);
                                // $query="INSERT INTO `logininfo` (`username`, `password`) VALUES ('$username', '$password')";
                                // $fire=mysqli_query($con,$query);
                                // if($fire)
                                //     echo "success";
                                $query="SELECT * FROM `logininfo` WHERE `username`='$username'";
                                $fire=mysqli_query($con,$query);
                                // if($fire)
                                //     echo "success";
                        
                                 if(mysqli_num_rows($fire)==0)
                                 {
                                     ?>
                                    <div class="alert alert-primary" role="alert">
                                        No matching data found!
                                    </div>
                                    <?php
                                 }
                                else if(mysqli_num_rows($fire)!=0)
                                {
                                    $query="SELECT `password` FROM `logininfo` WHERE `username`='$username'";
                                    $fire=mysqli_query($con,$query);
                                    $user=mysqli_fetch_assoc($fire);
                                    if($password == $user['password'])
                                    {
                                         //simply redirect to main page of website IF PASSWORD MATCHES -->
                                         header("Location:homepage.php"); 
                                        
                                    }
                                    else if($password != $user['password'])
                                    {
                                        ?>
                                        <div class="alert alert-primary" role="alert">
                                            incorrect password
                                        </div>
                                        <?php
                                    }
                                ?>
                                    
                                    
                                    <!-- // this sql query will be used in signup
                                    // $query="INSERT INTO `logininfo` (`username`, `password`) VALUES ('$username', '$password')";
                                    // $fire=mysqli_query($con,$query); -->
                                    <?php
                                }
                        
                            }
                    ?>
                    
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="forgetpassword.php">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php require ("C:/xampp/htdocs/loginpage/config/config.php"); ?>





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/forgetpass.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>forget password</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">forget password</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Register</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">fill the details</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">username</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="username" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Pin</label>
                                <div class="col-md-6">
                                    <input type="number" id="password" class="form-control" name="pin" required>
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="col-md-6 offset-md-4">
                                <button name="check" type="submit" class="btn btn-primary">
                                    check
                                </button>

                            </div>
                            <?php
                                if(isset($_POST['check'])){
                                    $username=$_POST['username'];
                                    $pin=$_POST['pin'];
                                    $query="SELECT * FROM `signup` WHERE `username`='$username'";
				                    $fire=mysqli_query($con,$query);
                                    if(mysqli_num_rows($fire)!=0)
                                    {
                                        $query="SELECT `pin` FROM `signup` WHERE `username`='$username'";
				                        $fire=mysqli_query($con,$query);
                                        $user=mysqli_fetch_assoc($fire);
                                        if($pin == $user['pin'])
                                        {
                                            header("Location:resetpassword.php?us=".$username);
                                        }
                                        else if($pin!=$user['pin'])
                                        {
                                            ?>
                                                <div class="alert alert-danger" role="alert">
                                                    INCORRECT PIN!
                                                </div>
                                            <?php
                                        }
                                    }
                                    else if(mysqli_num_rows($fire)==0)
                                    {
                                        ?>
                                            <div class="alert alert-warning" role="alert">
                                                username doesn't exists!
                                            </div>
                                        <?php
                                    }
                                }
                            ?>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>







</body>
</html>
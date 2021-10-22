<?php
    $server="localhost";//compulsory
    $username="root";//compulsory
    $password="";//compulsory
    $database="login";//optional

    $con=mysqli_connect($server,$username,$password,$database);
    // if($con)
    //     echo "established";
?>
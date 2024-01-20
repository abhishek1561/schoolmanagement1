<?php
    $host="localhost";
    $user="root";
    $pass="";
    $database="loginform";
    $con=mysqli_connect($host,$user,$pass,$database);
    if(!$con){
        die("Connection not establiched".mysqli_error($con));
    }
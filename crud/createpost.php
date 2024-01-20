<?php
include 'dbconnect1.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['submit'])){
        $name=$_POST['name'] ? $_POST['name'] : '';
        $email=$_POST['email'] ? $_POST['email'] : '';
        $password=$_POST['password'] ? $_POST['password'] : '';
        $sql="INSERT INTO signform(Name,Email,Password) VALUES('$name','$email','$password')";
        if(mysqli_query($con,$sql)){
            header('Location:read.php?success=Record inserted successfully');
        }else{
            echo mysqli_query($con);
        }
    }
}
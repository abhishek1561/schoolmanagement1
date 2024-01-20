<?php
include 'dbconnect1.php';
if(isset($_GET['Roll_No'])){
    $Roll_No=$_GET['Roll_No'];
    $sql="DELETE FROM signform WHERE Roll_No=$Roll_No";
    if(mysqli_query($con,$sql)){
        header('Location:read.php?success=Record Deleted');
    }else{
        header('Location:read.php');
    }
}
?>
<?php
    include 'dbconnect1.php';
    #  for update---
    if(isset($_POST['update'])){
        $rollnumber=$_POST['rollnumber']?$_POST['rollnumber']:'';
        $name=$_POST['name']?$_POST['name']:'';
        $email=$_POST['email']?$_POST['email']:'';        
        $password=$_POST['password']?$_POST['password']:'';
        $sql="UPDATE signform SET Name='$name',Email='$email',Password='$password' WHERE Roll_No=$rollnumber";
        if(mysqli_query($con,$sql)){
            header('Location:read.php?success=Record Updated SuccessFully');
        }else{
            echo mysqli_error($con);
        }
    }
    #   get 
    if(isset($_GET['rollnumber'])){
    $id=$_GET['rollnumber'];
    $selectsql="SELECT * FROM signform WHERE Roll_No=$rollnumber";
    $res=mysqli_query($con,$selectsql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            $name=$row['Name'];
            $email=$row['Email'];
            $password=$row['Password'];
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        section{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px;
        }
        .container{
            min-width: 400px;
            background: #176B87;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }
        .box{
            min-height: 500px;
            width: 400px;
            position: relative;
            overflow: hidden;
        }
        form{
            width: 100%;
            padding: 20px 20px;
            position: absolute;
            top: 0;
            transition: 0.8s;
        }
        .full-name{
            height: 40px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        h1{
            font-size: 35px;
            color: #fff;
            margin:0px 0px 40px 0px;
            text-align: center;
        }
        .fname{
            height: 100%;
            width: 49%;
            background: #fff;
            border-radius: 5px;
        }
        .lname{
            height: 100%;
            width: 49%;
            background: #fff;
            border-radius: 5px;
        }
        .email-box{
            height: 40px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            background: #fff;
            border-radius: 5px;
        }
        .n-password{
            height: 40px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            background: #fff;
            border-radius: 5px;
        }
        .con-password{
            height: 40px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            background: #fff;
            border-radius: 5px;
        }
        .check-box{
            height: 40px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            border-radius: 5px;
            padding:10px 0px 10px 0px;
        }

        .signup-btn{
            height: 40px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .agri{
            height: 40px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        .forget-password-box{
            height: 40px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        input{
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
        }
        .check-box input{
            height: 20px;
            width: 20px;
            margin-right: 10px;
        }
        .form1{
            left: 0%;
        }
        .form2{
            margin-top: 50px;
            left:100%;
        }
        span{
            color: #fff;
            margin-right: 10px;
        }
        button{
            height: 100%;
            width: 80%;
            background: #B4D4FF;
            border-radius: 10px;
            cursor: pointer;
            border: none;
            font-size: 20px;
            color: #176B87;
        }
        b{
            color: #fff;
            cursor: pointer;
        }
        a{
            color: #fff;
        }
    </style>
</head>
<body>
<section>
        <div class="container">
    <!-- --------------------------------------------Sing In Form--------------------------------------------- -->
       
            <div class="box">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form1">
                    <h1>SignUp </h1>
                    <div class="full-name">
                        <div class="fname">
                            <input type="text"name="firstname" value="<?php echo $name; ?>" placeholder="Enter Your First Name*">
                        </div>
                        <div class="lname">
                            <input type="text"name="lastname" value="<?php echo $name; ?>" placeholder="Enter Your Last Name*">
                        </div>
                    </div>
                    <div class="email-box">
                        <input type="email"name="email" value="<?php echo $email; ?>" placeholder="Enter Your Email Id*">
                    </div>
                    <div class="n-password">
                        <input type="password"name="password" value="<?php echo $password; ?>" placeholder="Enter Your Password*">
                    </div>
                    <div class="con-password">
                        <input type="password"name="password" value="<?php echo $password; ?>" placeholder="Enter Your Password*">
                    </div>
                    <div class="check-box">
                        <input type="checkbox"> <span>I accept the Terms of use & privacy policy</span>
                    </div>
                    <div class="signup-btn">
                        <button type="submit" value="update" name="update">update</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </section> 
</body>
</html>
<?php }else{
    header('Location:read.php');
}?>
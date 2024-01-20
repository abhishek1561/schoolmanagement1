<?php
    include 'dbconnect1.php';
    $sql="SELECT * FROM signform";
    $result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
</head>
<body>
    <script type="text/javascript">
        window.setTimeout(() => {
            document.getElementById('successmsg').style.display='none';
        }, 1000);
    </script>
    <?php if(isset($_GET['success'])){?>
    <h5 style="color:green;"id="successmsg">
    <?php echo $_GET['success']; ?>
    </h5>
    <?php } ?>
    <!-- <a href="creata.php"><button>Add Data</button></a> -->
    <table border="1">
        <tr>
            <th>#Roll_No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php  
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['Roll_No'] ?></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['Password'] ?></td>
           <td><a href="update.php?rollnumber=<?php echo $row['Roll_No'];?>"><button>Edit</button></a><a href="delete.php?rollnumber=<?php echo $row['Roll_No'];?>"><button>Delete</button></a></td>
        </tr>
        <?php 
                }
            } ?>
    </table>
</body>
</html>
<?php
// $con = new mysqli("localhost", "root","", "oas");
include 'db.php';
if ($con->connect_error) {
    die('Connect Error (' .
    $con->connect_errno . ') '.
    $con->connect_error);
}
 
$sql = " SELECT * FROM t_user_data INNER JOIN t_status ON t_user_data.s_id = t_status.s_id WHERE s_stat ='Applied'  ORDER BY t_user_data.s_id DESC ";
$result = $con->query($sql);
$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="w3.css">

    <style>
        th,td{
            text-align: center;
        }
    </style>
</head>

<body>
    <img src="images/toplogo2.png" height="100" width="1250">
    <br>
    <h1>Welcome Admin,</h1>
    <center>
        <div class="">
            <h2>Student List</h2>
            <div class="">
                <table id="t1" class="w3-table w3-striped">
                    <tr class="w3-blue w3-center">
                        <th>Name</th>
                        <th>Contact number</th>
                        <th>Signup date</th>
                        <th>Profile</th>
                    </tr>
                    <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
    
                <td><?php echo $rows['s_name'];?></td>
                <td><?php echo $rows['s_mob'];?></td>
                <td><?php echo $rows['s_signupdate'];?></td>
                <td><button class="w3-button w3-circle" onclick="location.href='st_profile.php?username=<?php echo $rows['s_id'];?>';">View</button></td>
            </tr>
            <?php
                }
            ?>
                </table>

            </div>
        </div>
    </center>
    <button class="w3-buuton w3-red w3-right" onclick="location.href='adlogout.php'">Logout</button>
</body>

</html>
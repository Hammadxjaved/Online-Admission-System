<?php
session_start();

// $con = mysqli_connect("localhost", "root", "", "oas");
// if (!isset($con)) {
//     die("Database Not Found");
// }
include 'db.php';

if (isset($_REQUEST["u_sub"])) {

    $id = $_POST['u_id'];
    $pwd = $_POST['u_ps'];
    if ($id != '' && $pwd != '') {
        $query = mysqli_query($con, "select * from t_user_data where s_id='" . $id . "' and s_pwd='" . $pwd . "'");
        $res = mysqli_fetch_row($query);
        $query1 = mysqli_query($con, "select * from t_user INNER JOIN t_user_data ON t_user.s_id = t_user_data.s_id where t_user.s_id='" . $id . "' and t_user_data.s_pwd='" . $pwd . "'");
        $res1 = mysqli_fetch_row($query1);

        if ($res) {
            $_SESSION['user'] = $id;
            header('location:admsnform.php');
        } else {

            echo '<script>';
            echo 'alert("Invalid username or password")';
            echo '</script>';
        }

        if ($res1) {
            $_SESSION['user'] = $id;
            header('location:homepageuser.php');
        } else {

            echo '<script>';
            echo 'alert("Invalid username or password")';
            echo '</script>';
        }
    } else {
        echo '<script>';
        echo 'alert("Enter both username and password")';
        echo '</script>';
    }
}
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="text/css" rel="stylesheet" href="css/login.css">
    </link>
    <style>
        #dmain {
            box-shadow: 0px 0px 14px #999999;
            border-radius: 5px;
            border-color: #d3d3d3;
            border-width: 1px;
            border-style: solid;
            background-color: white;
            width: 450px;
            height: 330px;
            margin-top: 30px;

        }
    </style>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>


    <title></title>



</head>

<body style="background-image:url('./images/background_global.jpg');
                  background-size: cover; ">
    <img src="./images/toplogo.png" width="1280" height="80">
    <form id="index" action="index.php" method="post">

        <div class="container-fluid">
            <div>
                <br> <br> <br> <br>
                <div id="dmain" style=" margin: auto;">
                    <br>
                    <center>
                        <h2>Student Login<h2>
                    </center>
                    <br>
                    <input type="text" id="u_id" name="u_id" class="form-control" style="width:300px; height: 30px; margin-left: 70px;" placeholder="Enter Your User ID"><br>
                    <input type="password" id="u_ps" name="u_ps" class="form-control" style="width:300px;height: 30px; margin-left: 70px;" placeholder="Enter Your Password"><br>
                    <input type="submit" id="u_sub" name="u_sub" value="Login" class="toggle btn btn-primary" style="width:100px;height: 30px; margin-left: 170px;"><br>
                    <a href="signup.php" style="margin-left: 190px;">Sign Up </a><br><br>
                    <a href="adminlogin.php" style="width:100px;height: 30px; margin-left: 330px;">Admin Login</a>
                </div>
            </div>

    </form>
</body>

</html>
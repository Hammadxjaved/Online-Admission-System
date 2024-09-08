<?php

session_start();
error_reporting(0);

$user = $_GET['username'];

// $con = mysqli_connect("localhost", "root", "", "oas");
include 'db.php';

$result1 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $user . "'");



if(isset($_POST['button1'])) {
    mysqli_query($con,"UPDATE t_status SET s_stat = 'Approved' where s_id='$user'");
    echo "Profile Approved";

}
if(isset($_POST['button2'])) {
    mysqli_query($con,"UPDATE t_status SET s_stat = 'Disapproved' where s_id='$user'");
    echo "Profile Disapproved";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="w3.css">
</head>

<body>
    <img src="images/toplogo2.png" height="100" width="1250">
    <br><br>
<h1 style="margin-left: 100px;">
<?php
    $picfile_path1 = 'studentpic/';
    $result2 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $user . "'");
    while ($row2 = mysqli_fetch_array($result2)) {
        $picsrc1 = $picfile_path1 . $row2['s_pic'];
        echo "<img src='$picsrc1' class='img-thumbnail' height = '200px'>";
        echo "<br><br><br>";
    }
    ?>
    Student 10th Marksheet <br>
    <?php
    $picfile_path1 = 'studentdoc/';
    $result2 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $user . "'");
    while ($row2 = mysqli_fetch_array($result2)) {
        $picsrc1 = $picfile_path1 . $row2['s_tenmarkpic'];
        echo "<img src='$picsrc1' class='img-thumbnail' height = '200px'>";
        echo "<br><br><br>";
    }
    ?>
    Student 10th Certificate<br>
    <?php
    $picfile_path1 = 'studentdoc/';
    $result2 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $user . "'");
    while ($row2 = mysqli_fetch_array($result2)) {
        $picsrc1 = $picfile_path1 . $row2['s_tencerpic'];
        echo "<img src='$picsrc1' class='img-thumbnail' height = '200px'>";
        echo "<br><br><br>";
    }
    ?>
    12th/Diploma Mark Sheet<br>
    <?php
    $picfile_path1 = 'studentdoc/';
    $result2 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $user . "'");
    while ($row2 = mysqli_fetch_array($result2)) {
        $picsrc1 = $picfile_path1 . $row2['s_twdmarkpic'];
        echo "<img src='$picsrc1' class='img-thumbnail' height = '200px'>";
        echo "<br><br><br>";
    }
    ?>
    12th/Diploma Certificate<br>
    <?php
    $picfile_path1 = 'studentdoc/';
    $result2 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $user . "'");
    while ($row2 = mysqli_fetch_array($result2)) {
        $picsrc1 = $picfile_path1 . $row2['s_twdcerpic'];
        echo "<img src='$picsrc1' class='img-thumbnail' height = '200px' >";
        echo "<br><br><br>";
    }
    ?>
    Identity Proof<br>
    <?php
    $picfile_path1 = 'studentproof/';
    $result2 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $user . "'");
    while ($row2 = mysqli_fetch_array($result2)) {
        $picsrc1 = $picfile_path1 . $row2['s_idprfpic'];
        echo "<img src='$picsrc1' class='img-thumbnail' height = '200px'>";
        echo "<br><br><br>";
    }
    ?>
    Signature <br>
    <?php
    $picfile_path1 = 'studentproof/';
    $result2 = mysqli_query($con, "SELECT * FROM t_userdoc where s_id='" . $user . "'");
    while ($row2 = mysqli_fetch_array($result2)) {
        $picsrc1 = $picfile_path1 . $row2['s_sigpic'];
        echo "<img src='$picsrc1' class='img-thumbnail' height = '200px'>";
        echo "<br><br><br>";
    }
    ?>
    </h1>
    <form method="post" style="text-align: center;">
        <input type="submit" name="button1" class="w3-button w3-green" value="Approve" />
        
        <input type="submit" name="button2" class="w3-button w3-red" value="Disapprove"/>
    </form>
    <button class="w3-button w3-blue w3-right" onclick="location.href='admin1.php'">Continue</button>
    <br><br><br>

</body>

</html>
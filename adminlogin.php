<?php
session_start();
error_reporting(0);
// $con=mysqli_connect("localhost","root","","oas");
// if(!isset($con))
// {
//     die("Database Not Found");
// }
include 'db.php';
  
  
if(isset($_REQUEST["a_sub"]))
{
    
 $aid=$_POST['a_id'];
 $apwd=$_POST['a_ps'];
 if($aid!=''&&$apwd!='')
 {
   $query=mysqli_query($con ,"select * from t_admin where ad_id='".$aid."' and ad_pswd='".$apwd."'");
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['ad']=$aid;
    header('location:admin1.php');
   }
   else
   {
     echo '<script>';
    echo 'alert("Invalid Login ! Please try again.")';
    echo '</script>';

   }
 }
 else
 {
     echo '<script>';
    echo 'alert("Enter both username and password")';
    echo '</script>';
 
 }
}



?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/login.css"></link>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
        <script language="javascript" type="text/javascript" src="jquery/jquery-ui.js"></script>
        <link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css" />
        <style>
         #adlog {
    box-shadow: 0px 0px 14px #999999; 
    border-radius:5px;
    border-color: #d3d3d3;
    border-width: 1px;
    border-style: solid;
    background-color:white;
    width:450px;
    height:300px;
    margin-left: 370px;
   margin-top: 30px;
    
}
        </style>

        <title></title>
        
        
        
    </head>
    <body style="background-image:url('./images/inbg.jpg');">
    <img src="./images/toplogo.png" width="100%" height="80">
          <form id="adminlogin" action="adminlogin.php" method="post">
                           
            
            <br> <br>  <br> 
            <div id = "adlog">    
                        <div class="container-fluid" style=" margin: auto;" >
                        <br>
                               <center><h2>Admin Login<h2></center>
                                <br>
                              
                                <input type="text" id="a_id" name="a_id" class="form-control" style="width:300px; height: 30px; margin-left: 60px;" placeholder="Enter Your User ID"><br>
                                    <input type="password" id="a_ps" name="a_ps" class="form-control" style="width:300px;height: 30px; margin-left: 60px;" placeholder="Enter Your Password"><br>
                                    <input type="submit" id="a_sub" name="a_sub" value="Login" class="toggle btn btn-primary" style="width:100px;height: 30px; margin-left: 160px;"><br>
                                    <a href="index.php" style="width:100px;height: 30px; margin-left: 330px;">Student Login</a>
                                      </div>
                                        
                                       
                                     </div>
                           </div>
                                
                              
                            </div>
                        
                    
                     <input type="hidden" id="txtid"  name="txtid" ><br/>
        </form>  

    </body>
</html>





























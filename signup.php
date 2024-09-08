<?php

error_reporting(0);
include 'db.php';
?>



<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
       <!-- <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css"> -->
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
        <script language="javascript" type="text/javascript" src="jquery/jquery-ui.js"></script>
        <link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css" />
       <!-- <link type="text/css" rel="stylesheet" href="css/sign.css"></link> -->
         
      
  

        <script type="text/javascript">
        function validate()
        {
            $('#signup input[type="text"]').each(function() {
                if(this.required)
                {
                    if(this.value=="")
                        $(this).addClass("inpterr");
                    else
                        $(this).addClass("inpterrc");
                }
              
                if($(this).attr("VT")=="NM")
                {
                    if((!isAlpha(this.value)) && this.value!="")
                    {
                       alert("Only Aplhabets Are Allowed . . .");
                       $(this).focus();
                    }
                }

                        if($(this).attr("VT")=="PH")
                        {
                                if((!isPhone(this.value)) && this.value!="")
                                {
                                        alert("Check the format . . .");
                                        $(this).focus();
                                }
                        }

                        if($(this).attr("VT")=="EML")
                        {
                                if(!IsEmail($(this).val()) && this.value!="")
                                {
                                        alert("Invalid Email . . . .");
                                        $(this).focus();
                                }
                        }	

                        if($(this).attr("VT")=="PIN")
                        {
                                if((!IsPin(this.value)) && this.value!="")
                                {
                                        alert("Invalid Pin Code . . . .");
                                        $(this).focus();
                                }
                        }

            });
        }
        
                function isAlpha(x)
                {
                    var re = new RegExp(/^[a-zA-Z\s]+$/);
                    return re.test(x);
                }
        
		function isPhone(x)
		{
			
			var ph = new RegExp (/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/);  
			//if(!ph.length<10)
			return ph.test(x);
		}
		
		function IsEmail(x) 
		{
  			var em = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
  			return em.test(x);
		}
		
		function IsPin(x) 
		{
  			var pin = new RegExp (/^\d{6}$/);
			
  			return pin.test(x);
		}		
        </script>
        
        <style type="text/css">
            #drig
                {
                    height:440px;
                    width:500px;
                    box-shadow: 0px 0px 15px #999999; 
                    margin-left:370px;

                }
            .inpterr
            {
                border: 1px solid red;
                background: #FFCECE;

            }
            
            .inpterrc
            {
                border: 1px solid black;
                background: white;
            }
        </style>


    </head>
    
    
    <body>
        <form id="signup" action="signupconfirm.php" method="post">
  
            <div id="dvlogin" style="box-shadow: 0px 5px 10px #999999">
                    <?php
                        
                    ?>
            </div>
                    
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        <img src="images/toplogo.png"  width="100%" height="80" style="box-shadow: 1px 5px 14px #999999; "></img>
                  </div>
                 </div>    
             </div>
       
        <div id="ddown">
            <br><br>
             <div id="drig" align="center">
                 <br>
            <font style="text-align:center; color:black; font-size:22px; font-family: verdana;font-weight: bold;">Sign Up Here</font><br>
                    <table id="tabintro">
                <tr>
                    <td>
                        <br>
                        <font style="color:black; font-family: Verdana;  margin-top:15px; font-size:17px;">Name * </font>
                    </td>
                </tr>
                <tr>
                    <td  style="padding-bottom: 1em;">
                        <input type="text" id="in_name" name="in_name" VT="NM" required="true" style="width:300px;height: 30px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <font style="color:black; font-family: Verdana;font-size:17px;" >Date of Birth * <font>
                    </td>
                </tr>
                <tr>
                    <td  style="padding-bottom: 1em;">
                        <input type="text" id="in_dob" name="in_dob"  required="true" style="width:300px;height: 30px;">
                         <script type="text/javascript">
                            $(function() {
                            $("#in_dob").datepicker({ dateFormat: 'yy-mm-dd', yearRange:'-25:+0', changeYear:true, changeMonth:true});
                        });
                         </script>
                    </td>
                </tr>
                 <tr>
                    <td>
                       <font style="color:black;  font-family: Verdana;font-size:17px;" required> Email ID <font>
                    </td>
                 </tr>
                 <tr>
                    <td  style="padding-bottom: 1em;">
                        <input type="email" id="in_eml" name="in_eml" VT="EML" required="true" style="width:300px;height: 30px;">
                    </td>
                </tr>
                
                <tr>
                    <td>
                       <font style="color:black; font-family: Verdana;font-size:17px;" required> Mobile No. *<font>
                    </td>
                 </tr>
                 <tr>
                    <td  style="padding-bottom: 1em;">
                        <input type="number" id="in_mob" name="in_mob" VT="PH" required="true" maxlength="10" style="width:300px;height: 30px;">
                    </td>
                </tr>
             
                <tr>
                    <td> 
                       
                           <input style="margin-left: 100px; width:100px;height: 30px;" type="submit" id="in_sub" name="in_sub" onclick="validate();"  value="SIGN UP"  style="margin-top: 8px;margin-left:90px;" class="toggle btn btn-primary">
                            <br><br>
                              <a href="index.php"style="width:100px;height: 30px; margin-left: 130px;">   Login </a>
                    </td>
                    
                </tr>
                </table>
            
            </div>
        </div>
        
 
        </form>
    </body>
</html>

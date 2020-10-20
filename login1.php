<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT EmailID, pass FROM userlogin WHERE EmailID = '$myusername' and pass = '$mypassword' and Signuptype = 'manager'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // $session_register("myusername");
        // $_SESSION['login_user'] = $myusername;
         
         header("location:Manager.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
             height: 100%;
            overflow: hidden;
            background-image: url(img/2.jpg);
            background-size: cover;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Email ID  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               <div class="w3-col m6 w3-large w3-margin-bottom">
                  <i class="fa fa-map-marker" style="width:30px"></i> Don't have an account?<br>
               </div>
            <div class="w3-padding-64">
              <a href="Registration.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Sign Up</a>
            </div>
               
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
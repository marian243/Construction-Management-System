<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myname = mysqli_real_escape_string($db,$_POST['name']);
      $myamount = mysqli_real_escape_string($db,$_POST['amount']);
      $myid = mysqli_real_escape_string($db,$_POST['id']);
      $mymid = mysqli_real_escape_string($db,$_POST['mid']);
      $mypid = mysqli_real_escape_string($db,$_POST['pid']);
      $mydob = mysqli_real_escape_string($db,$_POST['dob']);
      $myposition = mysqli_real_escape_string($db,$_POST['position']);
      
      $sql = "INSERT INTO `employee`(`Employee_ID`, `ProjectID`, `EmployeeName`, `Manager_ID`, `DateOfBirth`, `Position`, `Salary`) VALUES ($myid,$mypid,'$myname',$mymid,'$mydob','$myposition',$myamount)";
      //mysqli_query($db,$sql);
      if(mysqli_query($db, $sql)){
          header("location: Admin.php");
       } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
       }
         
         
      //}else {
         //$error = "Your Login Name or Password is invalid";
   }
?>

<html>

    <head>
        <title>User Information</title>
        <style>
        
         body
            {
                height: 100%;
                background-image: url(img/1.jpg);
                background-size:cover;
                overflow: hidden;
            }
               </style>
            
    </head>   
            
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Register</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>EmployeeID  :</label><input type = "text" name = "id" class = "box"/><br /><br />
                  <label>Name  :</label><input type = "text" name = "name" class = "box" /><br/><br />
                  <label>DateOfBirth  :</label><input type = "text" name = "dob" class = "box" /><br/><br />
                  <label>Position  :</label><input type = "text" name = "position" class = "box" /><br/><br />
                  <label>ManagerID  :</label><input type = "text" name = "mid" class = "box" /><br/><br />   
                  <label>ProjectID  :</label><input type = "text" name = "pid" class = "box" /><br/><br />
                  <label>Salary  :</label><input type = "text" name = "amount" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>		
            </div>
				
         </div>
			
      </div>

   </body>
</html>
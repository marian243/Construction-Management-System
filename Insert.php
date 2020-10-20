<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myname = mysqli_real_escape_string($db,$_POST['name']);
      $myamount = mysqli_real_escape_string($db,$_POST['amount']);
      $myid = mysqli_real_escape_string($db,$_POST['id']);
      
      $sql = "INSERT INTO `projects`(`Project_ID`, `Name`, `Cost`) VALUES ($myid,'$myname',$myamount)";
      //mysqli_query($db,$sql);
      if(mysqli_query($db, $sql)){
          header("location: Insertpp.php");
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
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Insert Project</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>ProjectID  :</label><input type = "text" name = "id" class = "box"/><br /><br />
                  <label>Name  :</label><input type = "text" name = "name" class = "box" /><br/><br />
                  <label>Cost  :</label><input type = "text" name = "amount" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>		
            </div>
				
         </div>
			
      </div>

   </body>
</html>
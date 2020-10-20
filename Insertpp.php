<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myid = mysqli_real_escape_string($db,$_POST['id']);
      $mypid = mysqli_real_escape_string($db,$_POST['pid']);
      $mysdate = mysqli_real_escape_string($db,$_POST['sdate']);
      $myedate = mysqli_real_escape_string($db,$_POST['edate']);
      $mypp = mysqli_real_escape_string($db,$_POST['pp']);
      
      $sql = "INSERT INTO `project_progress`(`Progress_ID`, `ProjectID`, `StartDate`, `EndDate`, `ProgressPercent`) VALUES ($myid,$mypid,'$mysdate','$myedate',$mypp)";
      //mysqli_query($db,$sql);
      if(mysqli_query($db, $sql)){
          header("location: Unti.php");
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
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Insert Project Progress</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>ID  :</label><input type = "text" name = "id" class = "box"/><br /><br />
                  <label>Project ID  :</label><input type = "text" name = "pid" class = "box" /><br/><br />
                  <label>StartDate  :</label><input type = "text" name = "sdate" class = "box" placeholder="yyyy-mm-dd"/><br/><br />
                  <label>EndDate  :</label><input type = "text" name = "edate" class = "box" placeholder="yyyy-mm-dd"/><br/><br />
                  <label>Project Percent  :</label><input type = "text" name = "pp" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>		
            </div>
				
         </div>
			
      </div>

   </body>
</html>
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myname = mysqli_real_escape_string($db,$_POST['name']);
      $myctid = mysqli_real_escape_string($db,$_POST['ctid']);
      $myid = mysqli_real_escape_string($db,$_POST['id']);
      $mycid = mysqli_real_escape_string($db,$_POST['cid']);
      $mypid = mysqli_real_escape_string($db,$_POST['pid']);
      
      $sql = "INSERT INTO `contract`(`Contract_ID`, `ProjectID`, `ContractName`, `ClientID`, `ContractorID`) VALUES ($myid,$mypid,'$myname',$cid,$ctid)";
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
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Register Contract</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Contract ID  :</label><input type = "text" name = "id" class = "box"/><br /><br />
                  <label>Name  :</label><input type = "text" name = "name" class = "box" /><br/><br />
                  <label>Project ID  :</label><input type = "text" name = "pid" class = "box" /><br/><br />
                  <label>Client ID  :</label><input type = "text" name = "cid" class = "box" /><br/><br />
                  <label>Contractor ID  :</label><input type = "text" name = "ctid" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>		
            </div>
				
         </div>
			
      </div>

   </body>
</html>
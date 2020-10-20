<html>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "construction management");  
 $query = "SELECT projects.Name, tbl_images.name, projects.Cost, project_progress.ProgressPercent FROM project_progress, projects, tbl_images
WHERE ProgressPercent < 100
AND project_progress.ProjectID = projects.Project_ID
AND projects.Project_ID = tbl_images.P_ID";  
 $result = mysqli_query($connect, $query);  
 echo '<div style="font-size:1.5em;color:red">PROJECTS TO BE COMPLETED: </div>';
 echo nl2br("\n");
 while($row = mysqli_fetch_array($result))  
 {  
     echo nl2br("\n");
     echo "NAME :". $row["Name"]." | COST : ৳ ". $row["Cost"]. " | PERCENT COMPLETED : ". $row["ProgressPercent"]."%"."<br>";
     echo nl2br("\n");
     echo '  <tr>  <td>  <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" /> </td> </tr>  ';  
     echo nl2br("\n");
     
 }  
 ?>  
</html>
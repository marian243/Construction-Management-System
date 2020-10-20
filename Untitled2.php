<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "construction management";

$conn =new mysqli($servername, $username, $password, $database);

if($conn->connect_error)
{
    die("Connection failed :".$conn->connect_error);
}
//echo "Connected successfully \n";
$sql = "SELECT projects.Name, project_progress.ProgressPercent FROM project_progress, projects 
WHERE ProgressPercent < 100
AND project_progress.ProjectID = projects.Project_ID";
$result =$conn->query($sql);

if($result->num_rows>0)
{
   echo '<div style="font-size:1.5em;color:red">Incomplete Projects: </div>';
    echo nl2br("\n");
    while($row = $result->fetch_assoc())
    {
        echo "NAME :". $row["Name"]." PROGRESS % :". $row["ProgressPercent"]."<br>";
    }
}
else {
    echo "0 results";
}
$conn->close();
?>

<html>
<title>Update</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:500px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-white w3-container" style="height:300px">
    <div class="w3-padding-64">
      <h1></h1>
    </div>
    <div class="w3-padding-64">
      <a href="Update1.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Update</a>
      <a href="Insert.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Insert New Project</a>    
      </div>
  </div>
  <div class="w3-half w3-white w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-container w3-black w3-padding-16">
</footer>

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "construction management";

$conn =new mysqli($servername, $username, $password, $database);

if($conn->connect_error)
{
    die("Connection failed :".$conn->connect_eroor);
}
//echo "Connected successfully \n";
$sql = "SELECT Supply_name FROM `supplyinfo` WHERE AmountSupplied < 100";
$result =$conn->query($sql);

if($result->num_rows>0)
{
    echo '<div style="font-size:1.5em;color:red">Need to Update: </div>';
    echo nl2br("\n");
    while($row = $result->fetch_assoc())
    {
        echo "NAME :". $row["Supply_name"]."<br>";
    }
}
else {
    echo "No update needed";
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
      <a href="Update.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Update</a>
      <a href="Insert1.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Insert New Supply</a>    
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
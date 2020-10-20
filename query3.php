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
$sql = "SELECT contract.ContractName, projects.Name, client_info.ClientName,contractorinfo.ContractorName 
FROM `contract`, `projects`, `client_info`, `contractorinfo` 
WHERE contract.ProjectID = projects.Project_ID
AND contract.ClientID = client_info.Client_ID
AND contract.ContractorID = contractorinfo.Contractor_ID";
$result =$conn->query($sql);

if($result->num_rows>0)
{
    echo "Contracts: ";
    echo nl2br("\n");
    echo nl2br("\n");
    while($row = $result->fetch_assoc())
    {
        echo "CONTRACT NAME : ". $row["ContractName"]." | PROJECT NAME : ". $row["Name"]." | CLIENT NAME : ". $row["ClientName"]." | CONTARCTOR NAME : ". $row["ContractorName"]."<br>";
        echo nl2br("\n");
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
<body class="w3-content" style="max-width:700px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-white w3-container" style="height:300px">
    <div class="w3-padding-64">
      <h1>Add New</h1>
    </div>
    <div class="w3-padding-64">
      <a href="Insert2.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Add Contract</a>
      <a href="Insert3.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Add Contractor</a>
      <a href="Insert4.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Add Client</a>
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
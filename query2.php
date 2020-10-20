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
$sql = "SELECT Name, Cost FROM projects";
$result =$conn->query($sql);

if($result->num_rows>0)
{
    echo "Projects and Costs: ";
    echo nl2br("\n");
    while($row = $result->fetch_assoc())
    {
        echo "NAME :". $row["Name"]."COST :". $row["Cost"]."<br>";
    }
}
else {
    echo "0 results";
}
$conn->close();
?>
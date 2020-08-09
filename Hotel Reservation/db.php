<html>
<body>
<?php
session_start();
include("config.php");
$firstname=$_GET["firstname"];
$lastname=$_GET["lastname"];
$conn=mysqli_connect($server,$user,$pass);
if(!conn)
echo "Connection error <br>";
else
echo "Connection success <br>";
$sq="CREATE DATABASE db1";
if(mysqli_query($conn,$sq))
echo "Database created  <br> ";
else
echo "Database is not created.  Process failed.<br> ";
$db="db1";
$conn=mysqli_connect($server,$user,$pass,$db);
$sq1="CREATE TABLE tb1(
firstname VARCHAR(15) NOT NULL,
lastname VARCHAR(15) NOT NULL
)";
if(mysqli_query($conn,$sq1))
echo "Table is created <br>";
else
echo "Table is not create. Process failed <br>";
$sq2="INSERT INTO tb1 (firstname,lastname)
VALUES ('$firstname','$lastname')";
if(mysqli_query($conn,$sq2))
echo "Insert into table is a success <br>";
else
echo "Insert into table failed <br>";
mysqli_close($conn);
session_stop();
?>

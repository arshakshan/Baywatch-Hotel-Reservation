<?php
$server="localhost";
$user="root";
$pass="";

$conn=mysqli_connect($server,$user,$pass);
if(!conn)
echo "Connection error <br>";
else
echo "Connection success <br>";
?>

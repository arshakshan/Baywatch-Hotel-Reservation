<!DOCTYPE html>
<html>
<title>Database</title>
<?php

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if($conn)
	echo "Connection successul!";
else
	echo "Connection failed!";	
echo "<br>";

        $column1value=$_POST["firstname"];
        $column2value=$_POST["lastname"];
        $column3value=$_POST["from"];
        $column4value=$_POST["to"];
        $column5value=$_POST["occupancy"];
        $column6value=$_POST["phone"];
        $column7value=$_POST["Choice"];
        $column8value=$_POST["email"];
    
        $email="email";
        $phone="phone";
        $occupancy="occupancy";
        $firstname="FirstName";
        $lastname="LastName";
        $from="from";
        $to="to";
        $choice="choice";
        $baywatch = "baywatch";
        $rooms="rooms";
    
    $sqli="CREATE DATABASE $baywatch";

	if(mysqli_query($conn,$sqli))
		echo "Database creation successful!";
	else{
		echo "Database creation failed:";
		echo $conn->error . ".";
	}
	echo "<br>";
	
	$conn=mysqli_connect($servername,$username,$password,$baywatch);

	$sqli="CREATE TABLE $rooms ($firstname VARCHAR(20), $lastname VARCHAR(20),$email VARCHAR(20), $from DATE, $to DATE, $occupancy INT(3), $phone INT(3), $choice VARCHAR(20) );";

	if(mysqli_query($conn,$sqli))
	{
		cho "Table creation successful!";
	}
	else
	{
		echo "Table creation failed:";
		echo $conn->error . ".";
	}
	echo "<br>";
	
	$sqli="INSERT INTO rooms VALUES ('$column1value', '$column2value', '$column3value', '$column4value', '$column5value','$column6value','$column7value');";

	if(mysqli_query($conn,$sqli))
		echo "Insertion successful!";
	else{
		echo "Insertion failed:";
		echo $conn->error . ".";
	}
	echo "<br>";
	echo "<br>";

	$start_time = strtotime($from);
	$end_time = strtotime($to);

	$differe= ($end_date- $start_date)/60/60/24;
	
	echo $differe;
?>
</html>

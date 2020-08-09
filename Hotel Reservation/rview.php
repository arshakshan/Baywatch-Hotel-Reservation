<?php

    $server = 'localhost';
    $user = 'root';
    $pass = 'root';
    $database = 'baywatch';
    
    $conn=mysqli_connect($server,$user,$pass,$database);

if(!$conn)
	echo "Connection failed!";	
echo "<br>";

    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    

//$conn=mysqli_connect($servername,$username,$password,'baywatch');

	$sqli="SELECT * FROM rooms WHERE FirstName='$fname' AND LastName='$lname';";

	$result = mysqli_query($conn, $sqli);  

	
		
	if(mysqli_num_rows($result) <= 0)
	{
		echo "<script type='text/javascript'>alert('You have not booked any rooms!');</script>";
		echo "<script type='text/javascript'> window.location='rvw.html';</script>";
		return(1);
	}
		
	
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result)) {

?>

<html>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset= "utf-8">
        <style type="text/css">
        
            #topbar {
                
                width: 99%;
                height: 150px;
                background-color: lightgrey;
                opacity: 0.5;
                position: fixed;
                margin: 0 auto;   
            
            }
             
                      
            #homepic{
                background-image: url("pic1.jpg");

  /* Set a specific height */
            height: 800px; 

  /* Create the parallax scrolling effect */
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
}
            #logo{
                
                height: auto;
                width: 140px;
                margin-top: 10px;
                margin-left: 20px;
                
            }
           
            #firstbody{
                
                height: 300px;
                background-color: whitesmoke;
                opacity: 0.5;
                width:auto;
                
            }
            
            div#nav_menu{
                position: absolute;
                top: 100px;
                right: 0px}
            
            div#nav_menu button{
                border-radius: 15px;
                border: 10px;
                font-size: 20px;
                font-family: garamond;
                background-color: transparent;
            }
            
            div#nav_menu button:hover{
                background-color: midnightblue;
                color:white;                    
            }
            
            button#active {color: black;
                        font-weight: 600;
                            background-color: black;}
           
            button#inquiry_button{
                position: absolute;
                top:50px;
                right: 20px;
                font-family: "Bell MT";
                font-size: 18px;
                background-color: transparent;
                border: 10px;
                
            }
            
            button#inquiry_button:hover{
                
                background-color: midnightblue;
                color:white;
                font-weight: 300;
                border-radius: 10px;
                border: 5px;
          
            }
            
             button#inquiry_button:hover{
                
                background-color: midnightblue;
                color:white;
                font-weight: 300;
                border-radius: 10px;
                border: 5px;
          
            }
            
             #resv_button{
                position: absolute;
                top:50px;
                float:left;
                right: 130px;
                font-family: "Bell MT";
                font-size: 18px;
                color: black;
                background-color: transparent;
                border: 10px;
                
            }
            #resv_button:hover{
                
                background-color: midnightblue;
                color:white;
                font-weight: 300;
                border-radius: 10px;
                border: 5px;
          
            }
            
            #hotel1{
                
                margin-right: 200px;
                margin-left: 200px;
                text-align: center; 
                float: center;
                font-family: comic sans ms;
                font-size:30px; 
		color: grey;
            }
            
            #hotel2{
                
                margin-right: 200px;
                margin-left: 200px;
                text-align: center;
                font-family:"comic sans ms";
                font-size: 24px;
                float: center;
		color: grey;
                
            }
            
            #hotel3{
                
                text-align: center;
                font-family: comic sans ms;
                font-size: 26px;
                float:center;
                color: grey;
            }
        
            #hotel_last{
                
                background-color: "#F8F2EE";
                height: 200px;
                width: auto;
                font-family: garamond;
                font-size: 20px;
            }
           
            #newtabl{
                
                height: 900px;
                width: auto;
                text-align: center;
                font-family: garamond;
                font-size: 20px;
                color: black;
            }
            
        </style>
        
        <script type="text/javascript">
            
         
            
            function contact(){
                
                alert("CONTACT : +1 4442807\nEMAIL : info@baywatchresort.com");
            }
            
            var image1=new Image()
                image1.src="room5.jpg";
            var image2= new Image()
                image2.src="room2.jpg";
            var image3= new Image()
                image3.src="room3.jpg";
            
            var step=1;
            function slideit(){
                
                document.images.slide.src=eval("image"+step+'.src');
                if(step<3)
                    step++;
                else
                    step=1;
                setTimeout("slideit()",2500)
            }
            
        </script>
    </head>
    
    <body >
        
        <br clear='all'>
        <div id="topbar" name="pop1">
            <img src="logo.png" id="logo"> 
            <button onclick="contact()" id='inquiry_button'>INQUIRY</button>
    
            <div id="nav_menu">
                
                <a href="try1.html"><button id='active'>Home</button></a>&nbsp;&nbsp;
                <a href="booking.html"><button>Booking</button></a>&nbsp;&nbsp;
                <a href="room.html"><button>Rooms</button></a>&nbsp;&nbsp;
                <a href="gallery.html"><button>Gallery</button></a>&nbsp;&nbsp;
        </div>
            </div>
	<div  id="homepic">
		</div>
            
        <div id="newtabl">
            <p id="title">BOOKING REFERENCE</p>
            <hr> <center>
	<table border="1"bordercolor="grey" cellpadding="10" cellspacing="20">
	<tr >
	<td><?php echo $row["FirstName"]; ?></td>
	<td><?php echo $row["LastName"]; ?></td>
	<td><?php echo $row["Email"]; ?></td>
	<td><?php echo $row["From_Date"]; ?></td>
        <td><?php echo $row["Occupancy"]; ?></td>
	<td><?php echo $row["Choice"]; }} ?></td>
	</tr></table></center>

            </div>
    </body>
    
    </html>    

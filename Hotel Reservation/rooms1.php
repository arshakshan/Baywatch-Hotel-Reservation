<?php

    $server = 'localhost';
    $user = 'root';
    $pass = 'root';
    $database = 'baywatch';
    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $occu = $_POST['occupancy'];
    $choice = $_POST['Choice'];

        
    $conn = mysqli_connect($server,$user,$pass,$database);
    
    if ($conn)
    {
       // echo "Connection Succesful.<br />";
        $query1 = "CREATE TABLE rooms(FirstName varchar(25), LastName varchar(25), Email varchar(50), Phone varchar(10), From_Date DATE, To_Date DATE, Occupancy int(1), Choice varchar(50))";
        
        $result1 = mysqli_query($conn,$query1);
        
       /*if ($result1)
        {
            echo "Table Created Successfully.<br />";
        }
        else
        {
            echo "Error creating table.<br />";
            echo $conn->error;
        }*/
            $query2 = "INSERT INTO rooms values('$fname', '$lname', '$email', '$phone', '$from', '$to', $occu, '$choice')";
    //echo $phone; 
            $result2=mysqli_query($conn,$query2);
            
         /*   if ($result2)
            {    
                echo "Value inserted succesfully.<br />";
            }
            else
            {    
                echo "Insertion error.<br />";
                echo $conn->error;
            }
        */
            $query3 = "SELECT * FROM rooms where Phone = '$phone'";
            $result3=mysqli_query($conn,$query3);
            $row = mysqli_fetch_assoc($result3);
	$start_time = strtotime("$from");
	$end_time = strtotime("$to");

	$differe= ($end_date- $start_date)/60/60/24;
	
	echo $differe;
    
    }

?> 

<html>
<!DOCTYPE HTML>
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
            #footer
            
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
        
        
        <div id="topbar" name="pop1">
            <img src="logo.png" id="logo"> 
            <a href="rvw.html"><button id='resv_button'>ABOUT BOOKING</button></a>
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
            
    <body>
        <br clear="all">
        <p id="hotel1">Hello <?php echo $row['FirstName'] ?> <br><br> Booking Succesful! <br><br></p>
	<p id="hotel2"> You have succesfully booked  <?php echo $row['Choice']?> from <?php echo $row['From_Date'] ?> to <?php echo $row['To_Date'] ?> <br><br> Details will be forwarded to your given mail:<?php echo $row['Email']?>
<!?php mail ("$row['Email'],"Booking Confirmation","This mail serves a confirmation for your stay Contact us for payement details""?> <br><br></p>
	<p id="hotel3">Wish you a pleasant stay!</p>
      <?php
		mysqli_close($conn);
	?>  
    </body>    
</html> 
  

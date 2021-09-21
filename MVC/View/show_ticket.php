<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Search Result </title>
<?php include "UI.php";?>
		</head>

  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> JebLu Airways </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
				<a href='../Controller/delete_ticket.php' style="margin-left: 20px;"> Delete Ticket </a>
				<a href='../Controller/search_admin.php' style="margin-left: 20px;"> Search Flight </a>
				<a href='../Controller/home.php' style="margin-left: 20px;"> Sign Out </a> <br><br><br>
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Search Result </div>
		<a href="show_flight.php" style="text-align: center; font-size: 25px; color:#2d2244"> Show Flight  </a>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#fcc298;">
			<div class="row" style="padding:5px;"> 
			</div>	
				
			
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
<?php

require_once('../Model/dbconnect.php');


	$sql = "SELECT * FROM ticket ";  
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
	  {
		  echo "<br> Full Name: ". $row[0]."<br>";
		  echo "<br> Flight ID: ". $row[1]."<br>";
		  echo "<br> Date: ". $row[2]."<br>";
		  echo "<br> Email: ". $row[3]."<br>";
		  echo "<br> Passport Number: ". $row[4]."<br>";
		  echo "<br> Passport Issue Date: ". $row[5]."<br>";
		  echo "<br> Passport Expire Date: ". $row[6]."<br>";
		  echo "<br> Card Number: ". $row[7]."<br>";
		  echo "<br> Ticket Number: ". $row[8]."<br>";
		  echo "</br>";
		
		 
          
	  }
	  }
	
	else{
		echo "No Flight";
	}
	

?>
	</div>
	</div>
	</section>
	
	<!----- Footer ----->
<?php include "Footer.php";?>
  </body> 
</html>


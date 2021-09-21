<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Booking </title>
			<?php include '../View/UI.php';?>

		</head>
  <body> 
  
     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> JebLu Airways </div>
			<div class="col-md-10" style="text-align: center"> 
				
				<a href="search_user.php" >Flight Search </a> 
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a>
	
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Ticket Booking </div>
		

	<section id = "section1">	
		<form action="../Model/booking_process.php" class="form_design" method="post">
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
			Passenger Name: <input type="text" name="sid"> <br/>
			Flight Id :<input type="text" name="omg"> <br/>
			Departure Date: <input type="date" name="cls"> <br/>
			Email: <input type="text" name="address"> <br/>
			Passport no: <input type="text" name="pport"> <br/> 
			Passport Issue Date: <input type="date" name="iss"> <br/>
			Passport Expire Date: <input type="date" name="exp"> <br/>
			Credit Card Number: <input type="text" name="ccn"> <br/>
			<button type="submit" value="Purchase">Purchase</button>
			</div>
		</form>
	</section>

	
	<!----- Footer ----->
<?php include '../View/Footer.php';?>
</body>
</html>


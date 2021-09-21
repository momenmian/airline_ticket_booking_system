<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Delete Flights </title>
<?php include '../View/UI.php';?>
		</head>
  
	<body>
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> JebLu Airways </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244">

				<a href="add_flight.php"> Add Flight </a>
				<a href='../View/show_flight.php' style="margin-left: 20px;"> Show Flight </a>
				<a href="update_flight.php" style="margin-left: 20px;"> Update Flight </a>
				<a href="search_admin.php" style="margin-left: 20px;"> Search Flight </a> <br>
				
				
				<a href='../View/show_ticket.php'> Show Ticket </a> 
				<a href="delete_ticket.php" style="margin-left: 20px;"> Delete Ticket </a>
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> 	<br><br><br>
				 
			</div>
		</div>
	</section>  
	
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Delete Flight </div>
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		<form action='../Model/delete_flight_process.php' class="form_design" method="post">
			Flight ID: <input type="text" name="fid"> <br/>
			<br/>
			<button type="submit" value="Delete"> Delete </button>
			</div>
		</form>
	</section>

	
	<!----- Footer ----->
<?php include '../View/Footer.php';?>
  </body> 
</html>


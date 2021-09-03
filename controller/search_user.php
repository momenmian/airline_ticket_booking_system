<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Search Flight </title>
		<?php include 'UI.php';?>
		</head>
	<body>	
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> JebLu Airways </div>
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#2d2244"> 
				
				<a href="bookingindex.php" > Book Now </a>
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> <br><br>
				 
			</div>
		</div>
	</section>
<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Search Flight </div>
		
		<form action="result_user.php" class="form_design" method="post"> 
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
			Destination: <input type="text" name="des"> <br/>
            Departure:<input type="text" name="del"> <br/> <br/>
			Date: <input type="date" name="fdate"> <br/> <br/>
			
			<button type="submit" value="Search"> Search </button>
			</div>
		</form>

	</section>

	<?php include 'Footer.php';?>
</body>
</html>
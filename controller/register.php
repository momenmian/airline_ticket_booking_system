<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Signup Page </title>
			<?php include 'UI.php';?>
			
		</head>

  <body>
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> JebLu Airways </div>
                <div class="col-md-10" style="text-align: center; font-size: 26px;"> SIGN UP </div>
		
		<form action="insert.php" class="form_design" method="post" style="color:White">
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">

		Name <input type="text" placeholder="Enter Name" name="fullname"> <br/>
		Username <input type="text" placeholder="Enter Username" name="uname"> <br/>
		Gender <input type="text" placeholder="Enter Gender" name="gen"> <br/>
		Email <input type="text" placeholder="Enter Email ID" name="email"> <br/>
		Credit Card No <input type="text" placeholder="Enter Credit Card No" name="card"> <br/>
		Address <input type="text" placeholder="Enter Address" name="live"> <br/>
		Date of Birth <input type="date" name="bd"> <br/> <br/>
		Mobile Number <input type="number" placeholder="Enter Mobile Number" name="mob"> <br/>
		Passport <input type="text" placeholder="Enter Passport" name="pport"> <br/> 
		Password <input type="password" placeholder="Enter Password" name="pass"> <br/> 


			<button type="submit" value="Add to Database">Sign Up</button> <br><br>
        </div>               
		</form>
	</section>
<?php include 'Footer.php';?>
  </body> 
</html>

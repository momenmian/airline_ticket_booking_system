<?php
// first of all, we need to connect to the database
require_once("dbconnect.php");

// we need to check if the input in the form textfield is not empty
if(isset($_POST['ticket_number'])){
	$i = $_POST['ticket_number'];
	
	//write the MySQL command and assign to a variable
	$sql = "DELETE FROM ticket WHERE ticket_number = $i";
	
	//Now Execute the Query
	$result = mysqli_query($conn, $sql);
	
	//Check to see if it is success or not
	if($conn->query($sql)=== True){
		echo "Deleted Successfully, Please Check Ticket";
		header('Location: ../Controller/delete_ticket.php');
	}
	else{
		echo "Deletion Failed";
		header('Location: ../Controller/delete_ticket.php');
	}
}



?>

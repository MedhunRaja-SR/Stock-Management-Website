<?php
$conn = mysqli_connect('localhost','root','','stock');


	$number = $_GET['number'];
	
	$query = "DELETE FROM projector WHERE number=$number";
	
	$result = mysqli_query($conn,$query);
	if($result==true)
	{
		header("location: modifyprojector.php");
	}
	else{
		header("location: modifyprojector.php");
	}

?>

	 
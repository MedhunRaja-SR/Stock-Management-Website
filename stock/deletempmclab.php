<?php
$conn = mysqli_connect('localhost','root','','stock');


	$number = $_GET['number'];
	
	$query = "DELETE FROM mpmc_lab WHERE number=$number";
	
	$result = mysqli_query($conn,$query);
	if($result==true)
	{
		header("location: modifympmclab.php");
	}
	else{
		header("location: modifympmclab.php");
	}

?>

	 
<?php
$conn = mysqli_connect('localhost','root','','stock');


	$number = $_GET['number'];
	
	$query = "DELETE FROM soft_lab WHERE number=$number";
	
	$result = mysqli_query($conn,$query);
	if($result==true)
	{
		header("location: modifysoftlab.php");
	}
	else{
		header("location: modifysoftlab.php");
	}

?>

	 
<?php
$conn = mysqli_connect('localhost','root','','stock');


	$number = $_GET['number'];
	
	$query = "DELETE FROM others WHERE number=$number";
	
	$result = mysqli_query($conn,$query);
	if($result==true)
	{
		header("location: modifyothers.php");
	}
	else{
		header("location: modifyothers.php");
	}

?>

	 
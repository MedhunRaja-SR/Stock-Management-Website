<?php
$conn = mysqli_connect('localhost','root','','stock');


	$number = $_GET['number'];
	
	$query = "DELETE FROM air_conditioner WHERE number=$number";
	
	$result = mysqli_query($conn,$query);
	if($result==true)
	{
		header("location: modifyaircon.php");
	}
	else{
		header("location: modifyaircon.php");
	}

?>

	 
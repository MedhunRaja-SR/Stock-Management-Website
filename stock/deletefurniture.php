<?php
$conn = mysqli_connect('localhost','root','','stock');


	$number = $_GET['number'];
	
	$query = "DELETE FROM furniture WHERE number=$number";
	
	$result = mysqli_query($conn,$query);
	if($result==true)
	{
		header("location: modifyfurniture.php");
	}
	else{
		header("location: modifyfurniture.php");
	}

?>

	 
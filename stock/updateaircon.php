<?php
$conn = mysqli_connect('localhost','root','','stock');

if(isset($_POST['submit'])){
	$number = $_POST['number'];
	$item_text = $_POST['item_text'];
	$stock_book = $_POST['stock_book'];
	$book_stock = $_POST['book_stock'];
	$physical_stock = $_POST['physical_stock'];
	$short_fall = $_POST['short_fall'];
	$unit_rate = $_POST['unit_rate'];
	$value_rate = $_POST['value_rate'];
	$remarks = $_POST['remarks'];
	

	$query = "UPDATE air_conditioner SET item_text='{$item_text}',stock_book='{$stock_book}',book_stock='{$book_stock}',
				physical_stock='{$physical_stock}',short_fall='{$short_fall}',unit_rate='{$unit_rate}',value_rate='{$value_rate}',
				remarks='{$remarks}' WHERE number=$number";
	
	
	$insert_row = mysqli_query($conn,$query);
			
		if($insert_row){  
			$message = "Data has been updated Successfully!";
			header("location: modifyaircon.php");
		}
		else{
			die("Query for update is not executed");
			}
	
}

?>

<html>
	<head>
		<title>update</title>
		<link rel="stylesheet" type="text/css" href="css4.css"/>
		  <style>
			label{
              display:inline-block;
              width:35%;
              padding-left:10px;
              text-align: left;
              font-size:x-large;
              line-height:20px;
			}
			body{
				background-image:url('logo.png');
				background-repeat:no-repeat;
				background-size:300px 300px;
				background-position:center;
				color:#D91B48;
			}
			h4{
				color:#9B4DD7;
			}
			h6{
				color:white;
			}
		</style>
	</head>
	<body>
	<center>
		<header>
			<div class="container">
				<h2 style="color:#1BD935"><b>Air Conditioner Database</b></h2>
			</div>
		</header>
		<main>
				<div class="container">
					<h6><?php $number =  $_GET['number']; ?></h6>
					<?php
						if(isset($message)){
							echo "<h4>" .$message. "</h4>";
						}
					?>
					
					<form method="POST" action="updateaircon.php" onsubmit="return confirm ('Are you confirm changes...?');">
						<p>
							<label>Serial Number:</label>
							<input type="number" name="number" value="<?php echo $number; ?>"/>
						</p>
						
						<p>
							<label>Item Description:</label>
							<input type="text" name="item_text"/>
						</p>
						<p>
							<label>Stock Book Page.no:</label>
							<input type="text" name="stock_book"/>
						</p>
						<p>
							<label>Book Stock:</label>
							<input type="number" name="book_stock"/>
						</p>
						<p>
							<label>Physical Stock:</label>
							<input type="number" name="physical_stock"/>
						</p>
						<p>
							<label>Short Fall:</label>
							<input type="text" name="short_fall"/>
						</p>
						<p>
							<label>Unit Rate:</label>
							<input type="number" name="unit_rate"/>
						</p>
						<p>
							<label>Value [including Tax]:</label>
							<input type="number" name="value_rate"/>
						</p>
						<p>
							<label>Remarks:</label>
							<input type="text" name="remarks"/>
						</p>
						<br/><br/>
						<input type="submit" name="submit" value="submit"/>
					</form>
				</div>
		</main>
		<br/><br/>
			<h4 align="right">
				<i>copyright by IT Department...</i>
			</h4>
		</center>
	
	</body>
</html>
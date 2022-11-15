<html>
<head>
	<title>Software Lab</title>
	<style>
	.s1{
		background-color:black;
		border:none;
		color:#BC19E5;
		padding:5px 25px;
		text-align:center;
		text-decoration:none;
		display:block;
		font-size:14px;
		width:40%;
		margin:10px 10px;
		}
	
	p{
		font-style:italic;
		color:black;
		position:absolute;
	
	}
	</style>
</head>
<body text="green">
<br/>
<h2 style="color:black;text-align:center">Software Lab Database</h2>
<center>
<br/><br/>
<table border="1" width="25%"  bgcolor="BLACK" cellpadding="3px">
	<tr style="color:red">
		<th>S.no</th>
		<th>Item Description</th>
		<th>Stock book/page.no</th>
		<th>Book stock</th>
		<th>Physical stock</th>
		<th>Short fall</th>
		<th>Unit rate</th>
		<th>value(including Tax)</th>
		<th>Remarks</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	<?php
		$conn = mysqli_connect('localhost','root','','stock');
		
		$query = "SELECT * FROM soft_lab";
		$result = mysqli_query($conn,$query);
		
		if($result == true)
		{
			$count = mysqli_num_rows($result);
			if($count > 0)
			{
				while($rows = mysqli_fetch_assoc($result))
				{
					$number = $rows['number'];
					$item_text = $rows['item_text'];
					$stock_book = $rows['stock_book'];
					$book_stock = $rows['book_stock'];
					$physical_stock = $rows['physical_stock'];
					$short_fall = $rows['short_fall'];
					$unit_rate = $rows['unit_rate'];
					$value_rate = $rows['value_rate'];
					$remarks = $rows['remarks'];
	?>
	<tr>
		<td><?php echo $number;?></td>
		<td><?php echo $item_text;?></td>
		<td><?php echo $stock_book;?></td>
		<td><?php echo $book_stock;?></td>
		<td><?php echo $physical_stock;?></td>
		<td><?php echo $short_fall;?></td>
		<td><?php echo $unit_rate;?></td>
		<td><?php echo $value_rate;?></td>
		<td><?php echo $remarks;?></td>
		<td>
			<form>
               <a href="updatesoftlab.php?number=<?php echo $number; ?>" class="s1" onclick="return confirm ('Are you want to update...?');">UPDATE</a>
			</form>
		</td>
		<td>
			<form>
               <a href="deletesoftlab.php?number=<?php echo $number; ?>" class="s1" onclick="return confirm ('Are you want to delete...?');">DELETE</a>
			</form>
		</td>
	</tr>
	<?php
				}
			}
		else
		{
			echo "No Data...!";
			echo "<br/><br/>";
		}
	}
	?>
	</table>
	</center>
	<br/><br/>
	<p>copyright by IT Department....</p>
</body>
</html>	
			
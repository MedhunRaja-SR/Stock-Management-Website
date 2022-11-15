<html>
	<head>
		<title>Stock Management</title>
		<link rel="stylesheet" type="text/css" href="css3.css">
		<style type="text/css">
			body{
				background-image:url(itblock.jpg);
				background-repeat:no-repeat;
				background-size:1500px 800px;
			}
			p{
				font-style:italic;
				color:white;
				position:absolute;
				bottom:8px;
				right:16px;
			}
		</style>
	</head>
	<body>
		<header>
			<div class="container">
				<h2 align="center">
					<b><u>Stock Management of IT Department</u></b>
				</h2>
			</div>
		</header>
		<main>
			<div class="menu2">
					<center>
					<br/>
					<h3>Search Data:</h3>

					<form action="http://localhost:8080/WT/Cgm" method="post">
						<select name="UN">
							<option value=printer>Printer</option>
							<option value=mpmc_lab>MP&MC Lab</option>
							<option value=ups>UPS</option>
							<option value=air_conditioner>Air Conditioner</option>
							<option value=furniture>Furniture</option>
							<option value=projector>Projector</option>
							<option value=dc_lab>Digital Laboratory</option>
							<option value=soft_lab>Software Laboratory</option>
							<option value=others>Other Products</option>
						</select>
						<br/><br/>
						<input type="submit"/>
					</form>
					</center>
				<br/><br/>
				<p>copyright by IT Department...</p>
			</div>
		</main>
	</body>
</html>



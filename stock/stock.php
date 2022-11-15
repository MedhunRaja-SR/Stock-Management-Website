<html>
	<head>
		<title>IT</title>
		<link rel="stylesheet" type="text/css" href="css5.css">
		<style type="text/css">
			.mySlides {display: none;}

			.dot {
				height: 10px;
				width: 10px;
				margin: 0 2px;
				background-color: #bbb;
				border-radius: 50%;
				display: inline-block;
				transition: background-color 0.6s ease;
			}

			.active {
				background-color: #717171;
			}

			.fade {
				-webkit-animation-name: fade;
				-webkit-animation-duration: 1.5s;
				animation-name: fade;
				animation-duration: 1.5s;
			}

			@-webkit-keyframes fade {
				from {opacity: .4} 
				to {opacity: 1}
			}

			@keyframes fade {
				from {opacity: .4} 
				to {opacity: 1}
			}
			body{
				background-image:url(it.jpg);
				background-repeat:no-repeat;
				background-size:1500px 650px;
			}
			p{
				font-style:italic;
				color:red;
				position:absolute;
				bottom:8px;
				right:16px;
			}

		</style>
	</head>
	<body>
		<h2>
			<center><b><u>Department of Information Technology </u></b></center>
		</h2>
		<main>
		<div class="mySlides fade">
			<img src="itblock.jpg" width="1350" height="400">
		</div>
		
		<div class="mySlides fade">
			<img src="cse.jpg" width="1350" height="400">
		</div>

		<div class="mySlides fade">
			<img src="auditorium.png" width="1350" height="400">
		</div>

		<div class="mySlides fade">
			<img src="complete.jpg" width="1350" height="400">
		</div>
		
		<div style="text-align:center">
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
		</div>
		<br/>
		<center>
		<div class="menu2">
				<a href="view.php" class="button">User</a>
				<a href="admin.php" class="button">Admin</a>
		</div>
		</center>
		</main>

<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 3000); // Change image every 2 seconds
	}
</script>
		
		<p>copyright by IT Department....</p>
	</body>
</html>



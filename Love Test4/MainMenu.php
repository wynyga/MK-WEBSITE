<?php
include('cekLogin.php')
?>

<!DOCTYPE html>
<html>
<head>
	<title>Love Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Love Calculator</h1>
		<form>
			<label for="name">Your Name:</label>
			<input type="text" id="name" placeholder="Enter your name">


			<label for="crush">Your Crush's Name:</label>
			<input type="text" id="crush" placeholder="Enter your crush name">

			<button type="button" onclick="calculate()">Calculate</button>
			<a href="index2.php"><img src="heart-button.png" alt="Button" width="50" height="50" class="bottom-right"></a>
		</form>
		<div id="result"></div>
	</div>
	<script src="script.js"></script>
</body>
</html>

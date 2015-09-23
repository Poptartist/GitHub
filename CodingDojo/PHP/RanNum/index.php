<?php
session_start();

if (!isset($_SESSION['rand'])){
	$_SESSION['rand'] = rand(1, 100);
}?>


<html>
<head>
	<title></title>
	<style type="text/css">
	* {
		text-align: center;
		font-family: sans-serif; Arial, Helvetica;
	}
	div {
		width: 250px;
		position: relative;
		margin: auto;
		margin-top: 100px;
		background-color: maroon;
		padding: 20px;
		border-radius: 10px;
		border: 2px solid black;
	}
	input.box {
		width: 75px;
		border: 1px solid black;
	}
	p {
		color: yellow;
	}
	h1 {
		color: yellow;
	}



	</style>
</head>
<body>
	<div id="main">
	<h1>Welcome to the Great Number Game!</h1>
	<p>I am thinking of a number between 1 and 100</p>
	<p>Take a guess!</p>

	<form action="results.php" method='post'>
		<input type='text' name='guess' class="box">
		<input type="submit" value="Submit">
	</form>
	</div>
<?php
if (isset($_SESSION['result'])) {
echo "<br>"; 

if ($_SESSION['result'] == 'low') {
	echo"<div id='low'><h1>Your guess is too low!</h1></div>";
	} elseif ($_SESSION['result'] == 'high'){
	echo "<div id='high'><h1>Your guess is too high!</h1></div>";
	} elseif ($_SESSION['result'] == 'correct') {
	echo "<div id='correct'><h1>Correct!</h1><form action='destroy.php'>
<input type = 'submit' value='Play Again?'></div>";}}

?>
</form>
</body>
</html>
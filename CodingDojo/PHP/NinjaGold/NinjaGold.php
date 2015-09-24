<?php
session_start();

date_default_timezone_set("America/Los_Angeles");
if (!isset($_SESSION['total'])) {
	$_SESSION['total'] = 0;
}
$_SESSION['date'] = date('F jS Y g:i a');
echo var_dump($_SESSION);
?>

<html>
<head>
	<title>Ninja Gold</title>
	<style type="text/css">
	* {
		vertical-align: top;
		font-family: Arial, Helvetica, sans-serif;
	}
	.box {
		width: 150px;
		height: 150px;
		padding: 20px;
		display: inline-block;
		background-color: grey;
		border: 1px solid black;
		border-radius: 20px;
		margin: auto;
	}
	.red {
		color: red;
	}
	</style>
</head>
<body>



	<div id="header">
		<h2>Your Gold: </h2><p><?php echo $_SESSION['total']?></p>
	</div>
	
	<div class="box">
		<h2>Farm</h2>
		<h3>(earns 10-20 gold)</h3>
		<form action="process.php" method="post">
			<input type="hidden" name ="building" value="farm">
			<input type="submit" value="Find Gold">
		</form>
	</div>
	<div class="box">
		<h2>Cave</h2>
		<h3>(earns 5-10 gold)</h3>
		<form action="process.php" method="post">
			<input type="hidden" name ="building" value="cave">
			<input type="submit" value="Find Gold">
		</form>
	</div>
	<div class="box">
		<h2>House</h2>
		<h3>(earns 2-5 gold)</h3>
		<form action="process.php" method="post">
			<input type="hidden" name ="building" value="house">
			<input type="submit" value="Find Gold">
		</form>
	</div>
	<div class="box">
		<h2>Casino</h2>
		<h3>(earns/takes 0-50 gold)</h3>
		<form action="process.php" method="post">
			<input type="hidden" name ="building" value="casino">
			<input type="submit" value="Find Gold">
		</form>
	</div>
	
	<div id="activities">
		<p>Activities: </p>
		
			<?php 
			if (!isset($_SESSION['gold']) && !isset($_SESSION['building'])) {
			}
			if ($_SESSION['gold'] > 0) {
				echo "<div>You entered the ". $_SESSION['building'] ." and earned " .$_SESSION['gold']." (" .date('F jS Y g:i a') .")</br></div>";
			}
			if ($_SESSION['gold'] < 0) {
				echo "<div class='red'>You entered the casino and lost " .$_SESSION['gold']." (" .$_SESSION['date'].")</div>";
			}
			?>

	</div>


	<div id="reset">
		<form action='destroy.php'>
			<input type = 'submit' value='Reset'>
		</form>
	</div>


</body>
</html>
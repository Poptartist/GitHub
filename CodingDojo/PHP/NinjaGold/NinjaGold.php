<?php
session_start();

date_default_timezone_set("America/Los_Angeles");
if (!isset($_SESSION['total'])) {
	$_SESSION['total'] = 0;
}
$_SESSION['date'] = date('F jS Y g:i a');


?>

<html>
<head>
	<title>Ninja Gold</title>
	<style type="text/css">
	* {
		vertical-align: top;
		font-family: Arial, Helvetica, sans-serif;
	}
	#wrapper {
		position: relative;
		margin: auto;
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
		color: white;
	}
	.red {
		color: red;
	}
	.green {
		color: green;
	}
	textarea {
		width: 500px;
		height: 300px;
	}
	#activities {
		padding: 5px;
		width: 500px;
		height: 300px;
		font-size: 11px;
		overflow-y: scroll;
		overflow-x: hidden;
		border: 1px solid darkgrey;
	}
	p.results {
		overflow: scroll;
		overflow-x: hidden;
	}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		$(document).ready(function(){

			function addActivities() {

			}

		});
	</script>
</head>
<body>



	<div id="header">
		<h2>Your Gold: </h2><p><?php echo $_SESSION['total']?></p>
	</div>
	<div id="reset">
		<form action='destroy.php'>
			<input type = 'submit' value='Reset'>
		</form>
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
			<input type="submit"  value="Find Gold">
		</form>
	</div>
	<div class="box">
		<h2>House</h2>
		<h3>(earns 2-5 gold)</h3>
		<form action="process.php" method="post">
			<input type="hidden" name ="building" value="house">
			<input type="submit"  value="Find Gold">
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
	
	<div>
		<p>Activities: </p>
		<div id="activities">
			<?php 
			if (isset($_SESSION['sentence'])) {
				foreach ($_SESSION['sentence'] AS $sentence) {
			echo $sentence;
				}
			}?>
		</div>
		
	</div>





</body>
</html>
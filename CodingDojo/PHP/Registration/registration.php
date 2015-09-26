<?php

session_start();
echo var_dump($_SESSION);
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Registration w/o DB</title>
	<style type="text/css">
	* {
		padding: 0px;
		margin: 0px;
	}
	title {
		display: none;
	}
	style {
		display: none;
	}
	#wrapper {
		position: relative;
		margin: 10px;
		padding: 10px;
	}
	form {
		display: block;
	}
	input {
		display: block;
	}

	</style>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
	$(document).ready(function(){

        $( "#datepicker" ).datepicker({
            dateFormat : 'mm/dd/yy',
            changeMonth : true,
            changeYear : true,
            yearRange: '-100y:c+nn',
            maxDate: '-1d'
        });

});

	</script>


</head>
<body>
	<div id="wrapper">

		<div id = "registration">
			<form action="process.php" method="post">
				Email: <input type="text" name="email">
				First Name: <input type="text" name="first_name">
				Last Name: <input type="text" name="last_name">
				Password: <input type="password" name="password">
				Confirm Password: <input type="password" name="confirm_pasword">
				Birth Date: <input type="text" name="birth_date" id="datepicker">
				Profile Picture: <input type="text" name="profile_picture">
				<input type='hidden' name='action' value='register'>
				<input type="submit" value="Submit">
			</form>
			<?php
				if(isset($_SESSION['errors'])) {
     				foreach($_SESSION['errors'] as $error) {
         				echo "<p>". $error. "</p>";
 					}
 				}
     		?>
     		
		</div>
	</div>

</body>
</html>
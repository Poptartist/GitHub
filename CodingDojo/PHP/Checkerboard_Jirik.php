<style = "text/css">
* {
	padding: 0px;
	margin: 0px;
}
table {
	position: absolute;
	border: 2px solid black;
	border-collapse: collapse;curl
}

td {
	border: 1px solid black;
	width: 40px;
	height: 40px;
}
.black {
	background-color: black;
	padding: 11px;
}

.red {
	background-color: red;
	padding: 11px;
}
.black:after{
		content: '.';
	visibility: hidden;
}
.red:after{
		content: '.';
	visibility: hidden;
}

</style>


<table>
	<?php for ($i=0; $i <= 8; $i++) { 
		echo "<tr>";
		if ($i % 2 == 0) {
			for ($j=0; $j <= 4; $j++) { 
			echo "<td><div class = 'black'></div></td>";
			echo "<td><div class = 'red'></div></td>";} // -- end for loop
		} // -- end if statement
		else
			for ($k=0; $k <= 4; $k++) { 
			echo "<td><div class = 'red'></div></td>";
			echo "<td><div class = 'black'></div></td>";
			} // end else statement


		echo "</tr>";}
	 ?>
</table>
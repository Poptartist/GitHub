<style = "text/css">
table td tr {
	border: 1px black solid;
}
td {
	width: 10px;
	height: 10px;
}
#black {
	background-color: black;
}

#red {
	background-color: red;
}
</style>


<table>
	<?php for ($i=0; $i < 9; $i++) { 
		echo "<tr>";
		for ($j=0; $j <9; $j++) { 
			if ($j % 2 == 0) {
				echo "<td><div class='black'></div></td>"; }
				else
					echo "<td><div class='red'></div></td>";
		}
		echo "</tr>"
	}



</table>
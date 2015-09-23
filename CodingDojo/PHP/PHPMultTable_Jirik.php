<style type="text/css">
table, th, td, tr {
border: 1px solid black;
border-collapse: collapse;
padding: 5px;
}
</style>

<table>
	<td></td>
<?php for ($x=1; $x < 10; $x++)
	{ ?>
	<td><?php echo "<b>$x</b>" ?></td>

<?php  } ?>
<?php for($i=1; $i< 10; $i++)
      { ?>
      <tr>
      	<td><?php echo "<b>$i</b>" ?></td>
<?php    for($j=1; $j< 10; $j++)
      { ?>
  		
         <td><?php echo $i*$j ?></td>
<?php  } ?>
      </tr>
<?php } ?>
</table>
<?php

$states = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');

?>
<form>
	<select id="forloop">

		<?php for ($i = 0; $i < count($states); $i++){
			echo '<option value="' .$states[$i] .'">' .$states[$i]. '</option>';
			}
		?>

	</select>

<select id="foreach">
	<?php foreach($states as $sn)
	echo '<option value="' .$sn .'">' .$sn. '</option>'
	?>
</select>

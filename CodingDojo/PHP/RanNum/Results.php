<?php
session_start();


if ($_POST['guess'] > $_SESSION['rand']) {
	$_SESSION['result'] = 'high';
} elseif ($_POST['guess'] < $_SESSION['rand']) {
	$_SESSION['result'] = 'low';
} else {
	$_SESSION['result'] = 'correct';
}

header('Location: index.php');
die();
?>

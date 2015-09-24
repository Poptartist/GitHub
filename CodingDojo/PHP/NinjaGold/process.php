<?php

session_start();
$_SESSION['sentence'][] = array();

if ($_POST['building'] == 'farm') {
	$_SESSION['building'] = "farm";
	$_SESSION['gold'] = rand(10, 20);
}
if ($_POST['building'] == 'cave') {
	$_SESSION['building'] = "cave";
	$_SESSION['gold'] = rand(5, 10);
}
if ($_POST['building'] == 'house') {
	$_SESSION['building'] = "house";
	$_SESSION['gold'] = rand(2, 5);
}
if ($_POST['building'] == 'casino') {
	$_SESSION['building'] = "casino";
	$_SESSION['gold'] = rand(-50, 50);
}
if ($_SESSION['gold'] > 0) {
	$_SESSION['sentence'][] = "<p class='green'>You entered a ".$_SESSION['building']." and earned ".$_SESSION['gold'].". (".$_SESSION['date'].")</p>";
}
if ($_SESSION['gold'] < 0) {
	$_SESSION['sentence'][] = "<p class='red'>You entered a casino and lost ".$_SESSION['gold'].". (".$_SESSION['date'].")</p>";
}


$_SESSION['total'] = $_SESSION['total'] + $_SESSION['gold'];

header("Location: NinjaGold.php");
die();


?>
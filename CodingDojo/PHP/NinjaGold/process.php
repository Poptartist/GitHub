<?php

session_start();

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

$_SESSION['total'] = $_SESSION['total'] + $_SESSION['gold'];

header("Location: NinjaGold.php");
die();


?>
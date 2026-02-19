<?php

if (!isset($_SESSION)) {
	session_start();
}




if (!isset($_SESSION['userid'])) {

	$founduser = false;


	if (!$founduser) {
		header("Location: badauth.php");
		exit;
	}
}

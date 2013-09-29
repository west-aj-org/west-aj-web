<?php
	session_start();
	$_SESSION['flag'] = $_GET['flag'];
	header("Location: capture_process.php");
?>
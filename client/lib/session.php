<?php
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['dsu_phone'])) {
	$id = $_SESSION['id'];
	$username = $_SESSION['username'];
	// $phone = $_SESSION['phone'];
	$password = $_SESSION['password'];
	$email = $_SESSION['email'];
}
